<template>
  <div>
    <div class="row d-none" id="addf">
      <div class="col-lg-3">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 v-if="edit" class="card-title">update Formateur</h4>
              <h4 v-else class="card-title">Add New Formateur</h4>
            </div>
          </div>
          <div class="iq-card-body">
            <form>
              <div class="form-group">
                <div class="add-img-user profile-img-edit">
                  <img
                    v-if="imgPreview"
                    class="profile-pic img-fluid"
                    v-bind:src="imgPreview"
                  
                  />
                   <img  v-else class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                  <div class="p-image">
                    <a
                    
                      class="upload-button btn iq-bg-primary"
                      >File Upload</a
                    >
                    <input class="file-upload" type="file" accept="image/*"   v-on:change="onChange" />
                  </div>
                </div>
                <div class="img-extension mt-3">
                  <div class="d-inline-block align-items-center">
                    <span>Only</span>
                    <a href="javascript:void();">.jpg</a>
                    <a href="javascript:void();">.png</a>
                    <a href="javascript:void();">.jpeg</a>
                    <span>allowed</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>User Role:</label>
                <select class="form-control" id="selectuserrole">
                  <option>Select</option>
                  <option>Web Designer</option>
                  <option>Web Developer</option>
                  <option>Tester</option>
                  <option>Php Developer</option>
                  <option>Ios Developer</option>
                </select>
              </div>
              <div class="form-group">
                <label for="furl">Facebook Url:</label>
                <input
                  type="text"
                  class="form-control"
                  id="furl"
                  placeholder="Facebook Url"
                />
              </div>
              <div class="form-group">
                <label for="turl">Twitter Url:</label>
                <input
                  type="text"
                  class="form-control"
                  id="turl"
                  placeholder="Twitter Url"
                />
              </div>
              <div class="form-group">
                <label for="instaurl">Instagram Url:</label>
                <input
                  type="text"
                  class="form-control"
                  id="instaurl"
                  placeholder="Instagram Url"
                />
              </div>
              <div class="form-group">
                <label for="lurl">Linkedin Url:</label>
                <input
                  type="text"
                  class="form-control"
                  id="lurl"
                  placeholder="Linkedin Url"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 v-if="edit"  class="card-title">Update Formateur Information</h4>
              <h4  v-else class="card-title">New Formateur Information</h4>
             
            </div>
          </div>
          <div class="iq-card-body">
            <div class="new-user-info">
             
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="fname">First Name:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name"
                      v-model="formateur.first_name"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Last Name:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lname"
                      placeholder="Last Name"
                      v-model="formateur.last_name"
                    />
                  </div>
                
                
                
                  <div class="form-group col-sm-12">
                    <label>Formation:</label>
                    <select
                      class="form-control"
                      id="selectcountry"
                      v-model="selectedFormation"
                      v-on:change="onChangeDrop"
                    >
                     
                     
                      <option
                        v-for="formation in formations"
                        :key="formation.id"
                        :value="formation.id"
                        
                      >
                        {{ formation.name }}
                      </option>
                    </select>
                  </div>
                  <div class="form-group col-sm-12">
                    <label>filier:</label>
                    <select class="form-control" v-model="formateur.filier_id"  >
                     
                     

                      <option  v-for="filier in filiers" :key="filier.id" :value="filier.id"
                      >{{filier.name}}</option >
                   
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobno">Mobile Number:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="mobno"
                      placeholder="Mobile Number"
                      v-model="formateur.phone"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="altconno">Alternate Contact:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="altconno"
                      placeholder="Alternate Contact"
                    />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="email">Email:</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Email"
                      v-model="formateur.email"
                    />
                  </div>
                
              
               
                  <div class="form-group col-md-6">
                    <label for="pass">Password:</label>
                    <input
                      type="password"
                      class="form-control"
                      id="pass"
                      placeholder="Password"
                      v-model="formateur.password"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="rpass">Repeat Password:</label>
                    <input
                      type="password"
                      class="form-control"
                      id="rpass"
                      placeholder="Repeat Password "
                    />
                  </div>
                </div>
                <div class="checkbox">
                  <label
                    ><input class="mr-2" type="checkbox" />Enable
                    Two-Factor-Authentication</label
                  >
                </div>
                <button v-if="edit" type="button" class="btn btn-primary" @click="updateFormateur">
               Update Formateur
                </button>
                 <button v-else type="button" class="btn btn-primary" @click="addFormateur">
                  Add New Formateur
                </button>
                   <button  type="button" class="btn btn-danger" @click="listform">
                  back
                </button>
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="listfo" class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
          <h4 class="card-title">formateur List</h4>
        </div>
        <div class="d-flex justify-content-end">
          <button
            type="button"
            class="btn btn-primary btn-lg d-flex-content-end"
            data-toggle="modal"
            @click="addform"
          >
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
                    <input
                      type="search"
                      class="form-control"
                      id="exampleInputSearch"
                      placeholder="Search"
                      aria-controls="user-list-table"
                    />
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="user-list-files d-flex float-right">
                <a class="iq-bg-primary" href="javascript:void();"> Print </a>
                <a class="iq-bg-primary" href="javascript:void();"> Excel </a>
                <a class="iq-bg-primary" href="javascript:void();"> Pdf </a>
              </div>
            </div>
          </div>
          <table
            id="user-list-table"
            class="table table-striped table-bordered mt-4"
            role="grid"
            aria-describedby="user-list-page-info"
          >
            <thead>
              <tr>
                <th>image</th>
                <th>f_Name</th>
                <th>l_Name</th>

                <th>Phone</th>

                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="formateur in formateurs" :key="formateur.id">
                <td class="text-center">
                  <img
                    class="rounded-circle img-fluid avatar-60"
                    :src="'/img/formateur/' + formateur.image"
                    alt="profile"
                  />
                </td>
                <td>{{ formateur.first_name }}</td>
                <td>{{ formateur.last_name }}</td>

                <td>{{ formateur.phone }}</td>
                <td>{{ formateur.email }}</td>
                <td>{{ formateur.password }}</td>

                <td>
                  <div class="flex align-items-center list-user-action">
                    <a
                      class="iq-bg-primary"
                      data-toggle="modal"
                      data-placement="top"
                      title=""
                      data-original-title="Edit"
                       @click="editformateur(formateur)"
                      ><i class="ri-pencil-line"></i
                    ></a>
                    <a
                      class="iq-bg-primary"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Delete"
                      @click="deleteformateur(formateur.id)"
                      ><i class="ri-delete-bin-line"></i
                    ></a>
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
          <div class="col-md-6"></div>
        </div>
      </div>

      <!-- Button trigger modal -->

      <!-- Modal -->
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      addf: false,
      formations: [],
      filiers: [],
      formateurs: [],
      formateur: {
        first_name: "",
        last_name: "",
        img: "",
        phone: "",
        email: "",
        password: "",
        filier_id: "",
      },
      strSuccess: "",
      strError: "",
      imgPreview: null,
      selectedFormation: "",

      edit: false,
      errors: [],
    };
  },

  created() {
    this.getformateur();
  },
  methods: {
    onChangeDrop() {
     console.log(this.selectedFormation);
     axios.get('/api/admin/formateur/getfilier/'+(this.selectedFormation))
          .then(res =>{
            
              this.filiers  = res.data.filiers;
               console.log( this.filiers);
          }).catch(err => {
            conole.log(err)
          })
    },
    onChange(e) {
      this.formateur.img = e.target.files[0];
      let reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          this.imgPreview = reader.result;
        }.bind(this),
        false
      );

      if (this.formateur.img) {
        if (/\.(jpe?g|png|gif)$/i.test(this.formateur.img.name)) {
          reader.readAsDataURL(this.formateur.img);
        }
      }
    },
    addFormateur() {
      let existingObj = this;
      const config = {
        headers: {
          "content-type": "multipart/form-data",
        },
      };

     const formData = new FormData();
      formData.append("first_name", this.formateur.first_name);
      formData.append("last_name", this.formateur.last_name);
      formData.append("phone", this.formateur.phone);
      formData.append("email", this.formateur.email);
       formData.append("password", this.formateur.password);
      formData.append("filier_id", this.formateur.filier_id);
      formData.append("image", this.formateur.img);


      axios
        .post("/api/admin/formateur/store", formData, config)
        .then((response) => {
          existingObj.strError = "";
          existingObj.strSuccess = response.data.success;

          console.log("ok");

          Toast.fire({
            icon: "success",
            title: " formateur added successfully",
          });
          this.closeModal();
          this.getformateur();
          this.listform();
        })
        .catch(function (error) {
          this.errors = error.response.data;
        });
    },
    getformateur() {
      axios
        .get("/api/admin/formateur/index")
        .then((response) => {
          console.log(response.data);
          this.formateurs = response.data.formateur;
          this.formations = response.data.formation;
        })
        .catch((err) => console.log(err));
    },

    closeModal() {
    
      this.formateur = {
        first_name: "",
        last_name: "",
        image: "",
        phone: "",
        email: "",
        password: "",
        filier_id: "",
      };

      this.edit = false;
    },

    deleteformateur(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .delete(`/api/admin/formateur/delete/${id}`)
            .then((res) => {
              this.getformateur();
            })
            .catch((err) => console.log(err));
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    },

    editformateur(f) {
      this.formateur = f;

      this.formateur.img = "/img/formateur/" + f.image;

      console.log(this.formateur.img);
      this.imgPreview = this.formateur.img;
      if (this.formateur.img) {
        if (/\.(jpe?g|png|gif)$/i.test(this.formateur.img.name)) {
          reader.readAsDataURL(this.formateur.img);
        }
      }
      this.addform();

      this.edit = true;
    },
    updateFormateur() {
      let existingObj = this;
      const config = {
        headers: {
          "content-type": "multipart/form-data",
        },
      };

      const formData = new FormData();
      formData.append("first_name", this.formateur.first_name);
      formData.append("last_name", this.formateur.last_name);
      formData.append("phone", this.formateur.phone);
      formData.append("email", this.formateur.email);
       formData.append("password", this.formateur.password);
      formData.append("filier_id", this.formateur.filier_id);
      formData.append("file", this.formateur.img);

      axios
        .post(
          "/api/admin/formateur/update/" + this.formateur.id,
          formData,
          config
        )
        .then((response) => {
          console.log();
          Toast.fire({
            icon: "success",
            title: " formateur updated successfully",
          });
          this.getformateur();
          this.listform();
          this.closeModal();
        })
        .catch(function (error) {
          this.errors = error.response.data;
        });
    },

    addform() {
      $("#listfo").addClass("d-none");

      $("#addf").removeClass("d-none");
    },
     listform() {
      $("#addf").addClass("d-none");

      $("#listfo").removeClass("d-none");
       this.formateur = {
        first_name: "",
        last_name: "",
        img: "",
        phone: "",
        email: "",
        password: "",
        filier_id: "",
      };
      this.imgPreview="";

      this.edit = false;
    },
  },
 
};
</script>
