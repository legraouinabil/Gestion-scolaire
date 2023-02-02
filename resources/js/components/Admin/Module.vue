<template>
  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Modul List</h4>
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
                <div class="col-sm-12 col-md-3">
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
                   <div class="col-sm-12 col-md-3">
                  <div id="user_list_datatable_info" class="dataTables_filter">
                    <form class="mr-3 position-relative">
                      <div class="form-group mb-0">
                    
                     
                        <select class="form-control" name="" id="">
                          <option>aaaaaaaa</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                            <option>aaaaaaaa</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                        </select>
                      
                      </div>
                     
                    </form>
                  </div>
                   
                </div>
                   <div class="col-sm-12 col-md-3">
                  <div id="user_list_datatable_info" class="dataTables_filter">
                    <form class="mr-3 position-relative">
                      <div class="form-group mb-0">
                      
                        <select class="form-control" name="" id="">
                          <option>aaaaaaaa</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                            <option>aaaaaaaa</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                          <option>qqqqqqqqqqqqqqqq</option>
                        </select>
                      </div>
                     
                    </form>
                  </div>
                   
                </div>
                <div class="col-sm-12 col-md-3">
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
                    <th>id</th>
                    <th>Name</th>
                    <th>description</th>
                    <th>nbHours</th>
                    <th>cofession</th>

                    <th>Modul</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="Modul in Moduls" :key="Modul.id">
                   
                      <td>{{ Modul.id }}</td>
                   
                    <td>{{ Modul.name }}</td>
                    <td>{{ Modul.description }}</td>
                    <td>{{ Modul.nbHours }}</td>
                    <td>{{ Modul.cofession }}</td>
                    <td>Modul</td>
                    <td>
                      <div class="d-flex justify-content-center list-user-action">
                        <a
                          class="iq-bg-primary"
                          data-toggle="modal"
                          data-placement="top"
                          title=""
                          data-original-title="Edit"
                          data-target="#exampleModalScrollable"
                          @click="editModul(Modul)"
                          ><i class="ri-pencil-line"></i
                        ></a>
                        <a
                          class="iq-bg-primary"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Delete"
                          @click="deleteModul(Modul.id)"
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
                update Modul
              </h5>
              <h5 v-else class="modal-title" id="exampleModalScrollableTitle">
                Add Modul
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
                  v-model="Modul.name"
                />
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
                  v-model="Modul.description"
                ></textarea>
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">nbHour</label>
                <input
                  type="number"
                  name=""
                  id=""
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                  v-model="Modul.nbHours"
                />
                <small id="helpId" class="text-muted">Help text</small>
              </div>
                    <div class="form-group">
                <label for="">cofession</label>
                <input
                  type="number"
                  name=""
                  id=""
                  class="form-control"
                  placeholder=""
                  aria-describedby="helpId"
                  v-model="Modul.cofession"
                />
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">formation</label>
                <select
                  class="form-control"
                  name=""
                  id=""
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

                 <div class="form-group">
                <label for="">filier</label>
                <select
                  class="form-control"
                  name=""
                  id=""
                         v-model="Modul.filier_id"
                    
                
                >
                  <option
                    v-for="filier in filiers"
                    :key="filier.id"
                    :value="filier.id"
                  >
                    {{ filier.name }}
                  </option>
                </select>
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
                @click="updateModul"
              
              >
                update changes
              </button>
              <button
                v-else
                type="button"
                class="btn btn-primary"
                @click="addModul"
              
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
      filiers:{},
      formations :{},
      Moduls: {},
      Modul: {
        name: "",
        description: "",
        nbHours: "",
        cofession: "",
        Modul_id: "",
        filier_id:""
      },
      edit: false,
      errors: [],
      selectedFormation:""
    };
  },

  created() {
    this.getModul();
  },
  methods: {
       onChangeDrop() {
     console.log(this.selectedFormation);
     axios.get('/api/admin/module/getfilier/'+(this.selectedFormation))
          .then(res =>{
            
              this.filiers  = res.data.filiers;
               console.log( this.filiers);
          }).catch(err => {
            conole.log(err)
          })
    },
    getModul() {
      axios
        .get("/api/admin/module/index/")
        .then((response) => {
          console.log(response.data);
          this.Moduls = response.data.modul;
          this.formations = response.data.formation;
        })
        .catch((err) => console.log(err));
    },
    addModul() {
      axios
        .post("/api/admin/module/store", this.Modul)
        .then((res) => {
          if (res.data.status == "error") {
            this.errors = res.data.errors;
            console.log(this.errors.name[0]);
          } else if (res.data.status == "succes") {
            console.log("ok");
            Toast.fire({
              icon: "success",
              title: " Modul added successfully",
            });
            this.Modul = {
             
              name: "",
              description: "",
            };
            this.closeModal();
          }

          this.getModul();
        })
        .catch((err) => console.log(err));
    },
    closeModal() {
      document.getElementById("close").click();
      this.Modul = {
        id: "",
        name: "",
        description: "",
      };

      this.edit = false;
      this.getModul();
    },

    deleteModul(id) {
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
            .delete(`/api/admin/module/delete/${id}`)
            .then((res) => {
              this.getModul();
            })
            .catch((err) => console.log(err));
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    },

    editModul(f) {
      this.Modul = f;
      this.edit = true;
    },
    updateModul() {
      axios
        .put("/api/admin/module/update/" + this.Modul.id, this.Modul)
        .then((res) => {
          if (res.data.status == "error") {
            this.errors = res.data.errors;
            console.log(this.errors.name[0]);
          } else if (res.data.status == "succes") {
            console.log("ok");
            Toast.fire({
              icon: "success",
              title: " Modul updated successfully",
            });
            this.getModul();
            this.closeModal();
          }
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>
