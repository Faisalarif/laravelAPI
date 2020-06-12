<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeBackupController extends Controller
{
    //

    public function index(){
            //     //Project assigne Contractors
        //     if(count($request->input('projects_contractors')) > 1) {

        //         foreach ($request->input('projects_contractors') as $value) {
   
        //             // $clienttbl = new ProjectContractorsModel;
                   
        //             // $clienttbl->client_id  = $value;
        //             // $clienttbl->project_id  = $inserted_project_id;
    
        //             // $clienttbl->save();
        //         }
    
        //     } else {
                
        //         // $clienttbl = new ProjectClientsModel;
                   
        //         // $clienttbl->client_id  = $request->input('clients_id')[0];
        //         // $clienttbl->project_id  = $inserted_project_id;

        //         // $clienttbl->save();
        //     }



         //Project assigne Contractors
        //  if(count($request->input('projects_contractors')) > 1) {


        //     foreach ($request->input('projects_contractors') as $contractor) {


        //         if( $contractor['contact_id'] > 1 ){


        //             foreach ($contractor['contact_id'] as  $contact_id_) {
                       
        //                 $contractor_table = new ProjectContractorsModel;

        //                 $contractor_table->company_id  = $contractor['company_id'];
        //                 $contractor_table->contact_id  = $contact_id_;
        //                 $contractor_table->project_id  = $inserted_project_id;
        //                 $contractor_table->save();

        //             }

        //         } else {
                    
        //                 $contractor_table = new ProjectContractorsModel;

        //                 $contractor_table->company_id  = $contractor['company_id'];
        //                 $contractor_table->contact_id  = $contact_id_;
        //                 $contractor_table->project_id  = $inserted_project_id;
        //                 $contractor_table->save();
        //         }
        //     }

        // } else {


        //     $contractor_table = new ProjectContractorsModel;

        //     $contractor_ = $request->input('projects_contractors');

        //     $contractor_company_id = $contractor_[0]['company_id'];

        //     if( $contractor_[0]['contact_id'] > 1 ) {
                
        //         foreach ($contractor_[0]['contact_id'] as  $contact_id_) {
                   
        //             $contractor_table = new ProjectContractorsModel;

        //             $contractor_table->company_id  = $contractor_company_id;
        //             $contractor_table->contact_id  = $contact_id_;
        //             $contractor_table->project_id  = $inserted_project_id;
        //             $contractor_table->save();

        //         }

        //     } else {
                
        //             $contractor_table->company_id  = $contractor_company_id;
        //             $contractor_table->contact_id  = $$contractor_[0]['contact_id'];
        //             $contractor_table->project_id  = $inserted_project_id;
        //             $contractor_table->save();
        //     }
            
        // }


        //     //Assign porject to clients
        //     if(count($request->input('clients_id')) > 1) {

        //         foreach ($request->input('clients_id') as $value) {
   
        //             $clienttbl = new ProjectClientsModel;
                   
        //             $clienttbl->client_id  = $value;
        //             $clienttbl->project_id  = $inserted_project_id;
    
        //             $clienttbl->save();
        //         }
    
        //     } else {
                
        //         $clienttbl = new ProjectClientsModel;
                   
        //         $clienttbl->client_id  = $request->input('clients_id')[0];
        //         $clienttbl->project_id  = $inserted_project_id;

        //         $clienttbl->save();
        //     }


        //     //Project assigne Contractors
        //     if(count($request->input('projects_contractors')) > 1) {

        //         foreach ($request->input('projects_contractors') as $value) {
   
        //             // $clienttbl = new ProjectContractorsModel;
                   
        //             // $clienttbl->client_id  = $value;
        //             // $clienttbl->project_id  = $inserted_project_id;
    
        //             // $clienttbl->save();
        //         }
    
        //     } else {
                
        //         // $clienttbl = new ProjectClientsModel;
                   
        //         // $clienttbl->client_id  = $request->input('clients_id')[0];
        //         // $clienttbl->project_id  = $inserted_project_id;

        //         // $clienttbl->save();
        //     }

       // if($project_->save()){
            
            
        //     $inserted_project_id = $project_->id;
            
            
        //     //Project assgin clients
        //     foreach ($request->input('clients_id') as $value) {

        //         $clienttbl = new ProjectClientsModel;
        
        //         $clienttbl->client_id  = $value;
        //         $clienttbl->project_id  = $inserted_project_id;

        //         $clienttbl->save();
        //     }


        //     //Project assigne Contractors
        //     foreach ($request->input('project_contractors') as $contractor) {

        //         foreach ($contractor['contact_id'] as  $contact_id) {
                
        //             $contractor_table = new ProjectContractorsModel;

        //             $contractor_table->company_id  = $contractor['company_id'];
        //             $contractor_table->contact_id  = $contact_id;
        //             $contractor_table->project_id  = $inserted_project_id;
        //             $contractor_table->save();
        //         }
        //     }


        //     //Project assigne designer
        //     foreach ($request->input('project_designers') as $designers) {

        //                 foreach ($designers['contact_id'] as  $contact_id_) {
                        
        //                     $designer_table = new ProjectDesignersModel;

        //                     $designer_table->company_id  = $designers['company_id'];
        //                     $designer_table->contact_id  = $contact_id_;
        //                     $designer_table->project_id  = $inserted_project_id;
        //                     $designer_table->save();
        //                 }
        //     }


        //     //Project assigne architecture
        //     foreach ($request->input('project_architecures') as $architecture) {

        //         foreach ($architecture['contact_id'] as  $contact_id_) {
                
        //             $architecture_table = new ProjectAchitecturesModel;

        //             $designer_table->company_id  = $architecture['company_id'];
        //             $designer_table->contact_id  = $contact_id_;
        //             $designer_table->project_id  = $inserted_project_id;
        //             $designer_table->save();
        //         }
        //     }

        
        //     //return (new ProjectResource($project_))->response()->setStatusCode(200);

        // } else {
            
        //     return  Response()->json(array('error' => 'error', 'status' => 400), 400);

        // }  
    }

}
