<template>
<div>
    <div class="row">
        <div class="col-sm-12">
              <div class="iq-card">
                 <div class="iq-card-header d-flex justify-content-between">
                
                    <div class="iq-header-title">
                       <h4 class="card-title">Course List</h4>
                      
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
                                <th>image</th>
                                <th>title</th>
                                <th>small_description</th>
                            
                                <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>

                             <tr v-for="Course in Courses " :key="Course.id" >
                                <td class="text-center"><img class="rounded-circle img-fluid avatar-60" :src="'/img/Course/'+Course.image" alt="profile"></td>
                                <td>{{Course.title}}</td>
                                <td>{{Course.description}}</td>
                              
                               
                                <td>
                                   <div class="flex align-items-center list-user-action">
                                    
                                      <a class="iq-bg-primary" data-toggle="modal" data-placement="top" title="" data-original-title="Edit"  data-target="#modelId" @click="editCourse(Course)" ><i class="ri-pencil-line"></i></a>
                                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""     data-original-title="Delete" @click="deleteCourse(Course.id)"><i class="ri-delete-bin-line"></i></a>
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
                 <h5 v-if="edit" class="modal-title">Edit Course</h5>
                  <h5  v-else class="modal-title">Add Course</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
               </div>
               <div class="modal-body">
                  <div class="card-body">
          

            <div v-if="strSuccess" class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{strSuccess}}</strong>
            </div>

            <div v-if="strError" class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{strError}}</strong>
            </div>


         
                <div class="form-group mb-2">
                    <label>Name</label><span class="text-danger"> *</span>
                    <input type="text" class="form-control" v-model="title" placeholder="Enter post name">
                      <span v-if="errors.title" :class="['label label-danger']">{{ errors.title[0] }}</span>
                </div>

                <div class="form-group mb-2">
                    <label>Name</label><span class="text-danger"> *</span>
                   <textarea class="form-control" rows="3" v-model="description" placeholder="Enter post description"></textarea>
                </div>

                <div class="form-gorup mb-2">
                    <label>Image</label><span class="text-danger"> *</span>
                    <input type="file" class="form-control mb-2" v-on:change="onChange">

                    <div v-if="img">
                        <img v-bind:src="imgPreview" width="100" height="100"/>
                    </div>
                </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                <button  v-if="edit" type="button" class="btn btn-primary mt-4 mb-4" @click="updateCourse"> update Course</button>
                <button v-else type="button" class="btn btn-primary mt-4 mb-4" @click="addCourse"> Add Course</button>
               </div>
           
            
        </div>
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
          
            Courses:{},
          
             id: '',
             title :'',
             img :'',
             description :'',        
            strSuccess: '',
            strError: '',
            imgPreview: null,
              edit:false,
              errors:[],
        }
    },
    
 
    created(){
     this.getCourse()
 },
  methods:{

 onChange(e) {
            this.img = e.target.files[0];
            let reader = new FileReader();
            reader.addEventListener("load", function () {
                this.imgPreview = reader.result;
            }.bind(this), false);

            if (this.img) {
                if ( /\.(jpe?g|png|gif)$/i.test( this.img.name ) ) {
                    reader.readAsDataURL( this.img );
                }
            }
        },

    addCourse() {
          
                let existingObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                const formData = new FormData();
                formData.append('title', this.title);
                formData.append('description', this.description);
                formData.append('image', this.img);
               

                axios.post('/api/admin/Course/store', formData, config)
                .then(response => {
                
                  if(response.data.success){
                           existingObj.strError = "";
                    existingObj.strSuccess = response.data.success;

                                 
                 Toast.fire({
                     icon: 'success',
                     title: ' Course updated successfully'
                   });
                     this.getCourse();
                   this.closeModal();
                  }
              
                })
                .catch(function(error) {
                    existingObj.strSuccess ="";
                  existingObj.strError = error.response.data.message;
                });
          
        },

   //////////////////////////////////
    getCourse(){
              axios.get('/api/formateur/course/index')
              .then(response => {
                  console.log(response.data);
                  this.Courses =response.data.course;
                
                 
              })
              .catch(err => console.log(err));
          },
    
          closeModal() {
            document.getElementById('close').click();
         },

         deleteCourse(id){
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
          axios.delete(`/api/admin/Course/delete/${id}`).
          then(res => {

          this.getCourse();
             
          }).catch(err =>console.log(err));
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
          
        },

        editCourse(b){
          this.id = b.id;
          this.title = b.title;
         this.description = b.description;
           this.img = "/img/Course/"+b.image;
           this.imgPreview = this.img;
          this.edit = true;
        },
          updateCourse(){
              let existingObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                const formData = new FormData();
                formData.append('title', this.title);
                formData.append('description', this.description);
                formData.append('file', this.img);

              axios.post(`/api/admin/Course/update/${this.id}`, formData, config)
                .then(response => {
                  Toast.fire({
                     icon: 'success',
                     title: ' Course updated successfully'
                   });
                     this.closeModal();
              this.getCourse();
                 
                })
                .catch(function(error) {
                    existingObj.strSuccess ="";
                    existingObj.strError = error.response.data.message;
                });
            
          },
          
          closeModal() {
            document.getElementById('close').click();
                this.title ='',
             this.img ='',
             this.description='',    
             this.edit = false;
         },
       
      }
 }
</script>
