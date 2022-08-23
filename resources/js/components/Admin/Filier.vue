<template>
  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">filier List</h4>
            </div>
            <div class="d-flex justify-content-end">
              <button
                type="button"
                class="btn btn-primary btn-lg d-flex-content-end"
                data-toggle="modal"
                data-target="#exampleModalScrollable"
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
                    <a class="iq-bg-primary" href="javascript:void();">
                      Print
                    </a>
                    <a class="iq-bg-primary" href="javascript:void();">
                      Excel
                    </a>
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
                    <th>Name</th>
                    <th>small_description</th>
                    <th>formation</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="filier in filiers" :key="filier.id">
                    <td class="text-center">
                      <img
                        class="rounded-circle img-fluid avatar-60"
                        :src="'/img/filier/' + filier.image"
                        alt="profile"
                      />
                    </td>
                    <td>{{ filier.name }}</td>
                    <td>{{ filier.small_description }}</td>
                    <td>{{ filier.formation.name }}</td>

                    <td>
                      <div class="flex align-items-center list-user-action">
                        <a
                          class="iq-bg-primary"
                          data-toggle="modal"
                          data-placement="top"
                          title=""
                          data-original-title="Edit"
                          data-target="#exampleModalScrollable"
                          @click="editfilier(filier)"
                          ><i class="ri-pencil-line"></i
                        ></a>
                        <a
                          class="iq-bg-primary"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Delete"
                          @click="deletefilier(filier.id)"
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
        </div>
      </div>

      <!-- Button trigger modal -->

      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModalScrollable"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                v-if="edit"
                class="modal-title"
                id="exampleModalScrollableTitle"
              >
                update filier
              </h5>
              <h5 v-else class="modal-title" id="exampleModalScrollableTitle">
                Add filier
              </h5>

              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="form-group">
                <label for="">name</label>
                <input
                  type="text"
                  name=""
                  id=""
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                  v-model="filier.name"
                />
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">small_description</label>
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="3"
                  class="form-control"
                  v-model="filier.small_description"
                ></textarea>
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">description</label>
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="4"
                  class="form-control"
                  v-model="filier.description"
                ></textarea>
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">duuré</label>
                <input
                  type="text"
                  name=""
                  id=""
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                  v-model="filier.dureé"
                />
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">formation</label>
                <select
                  class="form-control"
                  name=""
                  id=""
                  v-model="filier.formation_id"
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
              <div class="form-gorup mb-2">
                <label>Image</label><span class="text-danger"> *</span>
                <input
                  type="file"
                  class="form-control mb-2"
                  v-on:change="onChange"
                />

                <div v-if="filier.img">
                  <img v-bind:src="imgPreview" width="100" height="100" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
                id="close"
                @click="closeModal"
              >
                Close
              </button>
              <button
                v-if="edit"
                type="button"
                class="btn btn-primary"
                @click="updatefilier"
              >
                update changes
              </button>
              <button
                v-else
                type="button"
                class="btn btn-primary"
                @click="addFili"
              >
                Save changes
              </button>
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
      formations: [],
      filiers: [],
      filier: {
        id: "",
        name: "",
        small_description: "",
        img: "",
        description: "",
        dureé: "",
        formation_id: "",
      },
      strSuccess: "",
      strError: "",
      imgPreview: null,

      edit: false,
      errors: [],
    };
  },

  created() {
    this.getfilier();
  },
  methods: {
    onChange(e) {
      this.filier.img = e.target.files[0];
      let reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          this.imgPreview = reader.result;
        }.bind(this),
        false
      );

      if (this.filier.img) {
        if (/\.(jpe?g|png|gif)$/i.test(this.filier.img.name)) {
          reader.readAsDataURL(this.filier.img);
        }
      }
    },
    addFili() {
      let existingObj = this;
      const config = {
        headers: {
          "content-type": "multipart/form-data",
        },
      };

      const formData = new FormData();
      formData.append("name", this.filier.name);
      formData.append("description", this.filier.description);
      formData.append("small_description", this.filier.small_description);
      formData.append("dureé", this.filier.dureé);
      formData.append("formation_id", this.filier.formation_id);
      formData.append("image", this.filier.img);

      axios
        .post("/api/admin/filier/store", formData, config)
        .then((response) => {
          existingObj.strError = "";
          existingObj.strSuccess = response.data.success;

          console.log("ok");

          Toast.fire({
            icon: "success",
            title: " filier added successfully",
          });
          this.closeModal();
          this.getfilier();


           
       
        
        })
        .catch(function (error) {
          this.errors = error.response.data;
        });
    },
    getfilier() {
      axios
        .get("/api/admin/filier/index")
        .then((response) => {
          console.log(response.data);
          this.filiers = response.data.filier;
          this.formations = response.data.formation;
        })
        .catch((err) => console.log(err));
    },
   
    closeModal() {
      document.getElementById("close").click();
      this.filier = {
        id: "",
        name: "",
        small_description: "",
        img: "",
        description: "",
        dureé: "",
        formation_id: "",
      
      };

      this.edit=false;
     
    },

    deletefilier(id) {
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
            .delete(`/api/admin/filier/delete/${id}`)
            .then((res) => {
              this.getfilier();
            })
            .catch((err) => console.log(err));
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    },

    editfilier(f) {
      this.filier = f;

      this.filier.img = "/img/filier/"+ f.image;

      console.log(this.filier.img);
      this.imgPreview = this.filier.img;
      if (this.filier.img) {
        if (/\.(jpe?g|png|gif)$/i.test(this.filier.img.name)) {
          reader.readAsDataURL(this.filier.img);
        }
      }
    

      this.edit = true;
    },
    updatefilier() {
     
       let existingObj = this;
      const config = {
        headers: {
          "content-type": "multipart/form-data",
        },
      };

      const formData = new FormData();
      formData.append("name", this.filier.name);
      formData.append("description", this.filier.description);
      formData.append("small_description", this.filier.small_description);
      formData.append("dureé", this.filier.dureé);
      formData.append("formation_id", this.filier.formation_id);
      formData.append("file", this.filier.img);
     
      axios
        .post("/api/admin/filier/update/"+this.filier.id ,formData,config )
        .then((response) => { 
        

          console.log();
          Toast.fire({
            icon: "success",
            title: " filier updated successfully",
          });
            this.getfilier();
            this.closeModal();
        
        })
        .catch(function (error) {
          this.errors = error.response.data;
        });
    },
  },
};
</script>
