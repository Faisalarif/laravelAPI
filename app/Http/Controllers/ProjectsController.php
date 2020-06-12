<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Projects as ProjectModel;
use App\project_clients as ProjectClientsModel;
use App\ProjectDesignersModel;
use App\ProjectAchitecturesModel;
use App\ProjectContractorsModel;
use App\ContactsModel;
use App\Http\Resources\Projects as ProjectResource;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects_list = ProjectModel::paginate(10);

        //Retrun resource
        return ProjectResource::collection($projects_list);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        //assing project values to model
        $project_  = new ProjectModel;
        $project_->name = $request->input('name');
        $project_->physical_address = $request->input('physical_address');
        $project_->estimated_startdate = $request->input('estimated_startdate');
        $project_->estimated_enddate = $request->input('estimated_enddate');
        
        //start db traanction
        DB::beginTransaction();
        
        try {

            $project_->save();

            $inserted_project_id = $project_->id;
                        
            //Project assgin clients
            foreach ($request->input('clients_id') as $value) {

                $clienttbl = new ProjectClientsModel;
        
                $clienttbl->client_id  = $value;
                $clienttbl->project_id  = $inserted_project_id;

                $clienttbl->save();
            }

            //Project assigne Contractors
            foreach ($request->input('project_contractors') as $contractor) {

                foreach ($contractor['contact_id'] as  $contact_id) {
                
                    $contractor_table = new ProjectContractorsModel;

                    $contractor_table->company_id  = $contractor['company_id'];
                    $contractor_table->contact_id  = $contact_id;
                    $contractor_table->project_id  = $inserted_project_id;
                    $contractor_table->save();
                }
            }


            //Project assigne designer
            foreach ($request->input('project_designers') as $designers) {

                foreach ($designers['contact_id'] as  $contact_id_) {
                
                    $designer_table = new ProjectDesignersModel;

                    $designer_table->company_id  = $designers['company_id'];
                    $designer_table->contact_id  = $contact_id_;
                    $designer_table->project_id  = $inserted_project_id;
                    $designer_table->save();
                }
            }


            //Project assigne architecture
            foreach ($request->input('project_architecures') as $architecture) {

                foreach ($architecture['contact_id'] as  $contact_id_) {
                
                    $architecture_table = new ProjectAchitecturesModel;

                    $architecture_table->company_id  = $architecture['company_id'];
                    $architecture_table->contact_id  = $contact_id_;
                    $architecture_table->project_id  = $inserted_project_id;
                    $architecture_table->save();
                }
            }

            DB::commit();

            return (new ProjectResource($project_))->response()->setStatusCode(200);

        } catch (\Throwable $th) {

            DB::rollback();

            return Response()->json(array('error' => $th, 'status' => 400), 400);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


}
