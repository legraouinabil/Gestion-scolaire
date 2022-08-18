<template>
<div>
    <div class="row">
        <div class="col-sm-12">
              <div class="iq-card">
                 <div class="iq-card-header d-flex justify-content-between">
                
                    <div class="iq-header-title">
                       <h4 class="card-title">Formation List</h4>
                      
                    </div>
                    <div class="d-flex justify-content-end">
                     
                     <button type="button" class="btn btn-primary btn-lg d-flex-content-end" data-toggle="modal" data-target="#modelId">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                     Add New
                    </button>
                </div>
                 </div>
                 <div class="iq-card-body">
                    <div class="table-responsive">
                       <div class="row justify-content-between">
                          <div class="col-sm-12 col-md-6">
                             <div id="user_list_datatable_info" class="dataTables_filter">
                                <form class="mr-3 position-relative">
                                   <div class="form-group mb-0">
                                      <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                   </div>
                                </form>
                             </div>
                          </div>
                          <div class="col-sm-12 col-md-6">
                             <div class="user-list-files d-flex float-right">
                                <a class="iq-bg-primary" href="javascript:void();" >
                                   Print
                                 </a>
                                <a class="iq-bg-primary" href="javascript:void();">
                                   Excel
                                 </a>
                                 <a class="iq-bg-primary" href="javascript:void();">
                                   Pdf
                                 </a>
                               </div>
                          </div>
                       </div>
                       <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                         <thead>
                             <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>description</th>
                              
                                <th class="w-20">Action</th>
                             </tr>
                         </thead>
                         <tbody>

                             <tr v-for="formation in formations " :key="formation.id" >
                                <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="images/user/01.jpg" alt="profile"></td>
                                <td>{{formation.name}}</td>
                                <td>{{formation.description}}</td>
                               
                                <td>
                                   <div class="flex align-items-center list-user-action">
                                    
                                      <a class="iq-bg-primary" data-toggle="modal" data-placement="top" title="" data-original-title="Edit"  data-target="#modelId" @click="editFormation(formation)" ><i class="ri-pencil-line"></i></a>
                                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""     data-original-title="Delete" @click="deleteFormation(formation.id)"><i class="ri-delete-bin-line"></i></a>
                                   </div>
                                </td>
                             </tr>
                        
                       
                         </tbody>
                       </table>
                    </div>
                       <div class="row justify-content-between mt-3">
                          <div id="user-list-page-info" class="col-md-6">
                             <span>Showing 1 to 5 of 5 entries</span>
                          </div>
                          <div class="col-md-6">
                             <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                   <li class="page-item disabled">
                                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                   </li>
                                   <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                                   <li class="page-item">
                                      <a class="page-link" href="#">Next</a>
                                   </li>
                                </ul>
                             </nav>
                          </div>
                       </div>
                 </div>
              </div>
        </div>

        <!-- Button trigger modal -->
       
        
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                 <h5 v-if="edit" class="modal-title">Edit formation</h5>
                  <h5  v-else class="modal-title">Add formation</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
               </div>
               <div class="modal-body">
                 <div class="form-group">
                   <label for="">formation name</label>
                   <input type="text" name="" id="" :class="['form-control' , errors.name?'is-invalid' :'']" placeholder="" aria-describedby="helpId" v-model="formation.name">
                   <small id="helpId" class="text-muted">Help text</small>
                 </div>
                 <div class="form-group">
                  <label for="">formation description</label>
                <textarea name="" id="" cols="30" rows="10" :class="['form-control' ,errors.name?'is-invalid' :'']" v-model="formation.description">


                </textarea>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                   <button  v-if="edit" type="button" class="btn btn-primary" @click="updateFormation">Update</button>
                  <button  v-else type="button" class="btn btn-primary" @click="addFormation">Save</button>

               </div>
            </div>
         </div>
        </div>
     </div>
</div>
</template>
<script>

export default {
    data() {
        return {
          
            formations:{},
            formation : {
                id: '',
                name :'',
                description :''
              

              },
              edit:false,
              errors:[],
        }
    },
    props:[ ,'route_store' , 'route_delete'],
 
    created(){
     this.getFormation()
 },
  methods:{
    getFormation(){
              axios.get('/api/admin/formation/index')
              .then(response => {
                  console.log(response.data);
                  this.formations =response.data;
                
                 
              })
              .catch(err => console.log(err));
          },
          addFormation(){
            axios.post('/api/admin/formation/store' , this.formation).
            then(res => {
                if(res.data.status =='error'){
                    this.errors =res.data.errors;
                    console.log(this.errors.name[0]); 
                  }
                  else if(res.data.status =='succes'){
                    
                    console.log("ok");        
                 Toast.fire({
                     icon: 'success',
                     title: ' formation added successfully'
                   });
                   this.closeModal();
                }
          
            this.getFormation();
               
            }).catch(err =>console.log(err));
          },
          closeModal() {
            document.getElementById('close').click();
         },

         deleteFormation(id){
                  Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(`/api/admin/formation/delete/${id}`).
          then(res => {

          this.getFormation();
             
          }).catch(err =>console.log(err));
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
          
        },

        editFormation(f){
          this.formation = f;
          this.edit = true;
        },
          updateFormation(){
            axios.put('/api/admin/formation/update/'+this.formation.id , this.formation).
            then(res => {
                if(res.data.status =='error'){
                    this.errors =res.data.errors;
                    console.log(this.errors.name[0]); 
                  }
                  else if(res.data.status =='succes'){
                    
                    console.log("ok");        
                 Toast.fire({
                     icon: 'success',
                     title: ' formation updated successfully'
                   });
                     this.getFormation();
                   this.closeModal();
                }
               
           this.formation ={
                id: '',
                name :'',
                description :''
              

              }
           
               
            }).catch(err =>console.log(err));
           
          },
          
          closeModal() {
            document.getElementById('close').click();
         },
       
      }
 }
</script>
