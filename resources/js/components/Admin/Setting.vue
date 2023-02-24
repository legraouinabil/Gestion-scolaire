<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div
                            class="tab-pane fade active show"
                            id="personal-information"
                            role="tabpanel"
                        >
                            <div class="iq-card">
                                <div
                                    class="iq-card-header d-flex justify-content-between"
                                >
                                    <div class="iq-header-title">
                                        <h4 class="card-title">
                                            Setting Website
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div
                                            class="form-group row align-items-center"
                                        >
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <img
                                                        class="profile-pic"
                                                        :src="
                                                            '/img/setting/' +
                                                            setting.logo
                                                        "
                                                        alt="profile-pic"
                                                    />
                                                    <div class="p-image">
                                                        <i
                                                            class="ri-pencil-line upload-button"
                                                        ></i>
                                                        <input
                                                            class="file-upload"
                                                            type="file"
                                                            accept="image/*"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                           
                                            <div class="form-group col-sm-6">
                                                <label for="lname"
                                                    >Phone:</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="lname"
                                                    v-model="setting.phone"
                                                     placeholder="Mobile Number"
                                                />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="uname"
                                                    >email:</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="uname"
                                                    v-model="setting.email"
                                                />
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="cname">Facebook:</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="cname"
                                                  
                                                    v-model="setting.facebook"
                                                />
                                            </div>
                                             <div class="form-group col-sm-4">
                                                <label for="cname">twiter:</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="cname"
                                                   
                                                    v-model="setting.twiter"
                                                />
                                            </div>
                                             <div class="form-group col-sm-4">
                                                <label for="cname">Instagrame:</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="cname"
                                                  
                                                    v-model="setting.insta"
                                                />
                                            </div>

                                            <div class="form-group col-sm-12">
                                                <label>Address:</label>
                                                <textarea
                                                    class="form-control"
                                                    name="address"
                                                    rows="5"
                                                    style="line-height: 22px"
                                                    v-model="setting.adresse"
                                                >
                                                </textarea>
                                            </div>
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-primary mr-2"
                                            @click="updateSetting()"
                                        >
                                            Submit
                                        </button>
                                        <button
                                            type="reset"
                                            class="btn iq-bg-danger"
                                        >
                                            Cancle
                                        </button>
                                    </form>
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
            setting: {
             
                logo: null,
                email: "",
                phone: "",
                maps: "",
                adresse: "",
                facebook: "",
                twiter: "",
                insta: "",
            },
        };
    },

    created() {
        this.getSetting();
    },

    methods: {
        getSetting() {
            axios
                .get("/api/admin/setting")
                .then((res) => {
                    this.setting = res.data;
                    console.log(this.setting);
                })
                .catch((error) => console.log(error));
        },

        updateSetting() {
            let existingObj = this;
            const config = {
                headers: {
                    "content-type": "multipart/form-data",
                },
            };

            const formData = new FormData();
            formData.append("email", this.setting.email);
            formData.append("phone", this.setting.phone);
            formData.append("adresse", this.setting.adresse);
            formData.append("facebook", this.setting.facebook);
            formData.append("twiter", this.setting.twiter);
            formData.append("insta", this.setting.insta);
            formData.append("map", this.setting.map);
            console.log(this.setting);
            axios
                .post("/api/admin/setting/" + this.setting.id, formData, config)
                .then((response) => {
                    console.log(response.data);

                    Toast.fire({
                        icon: "success",
                        title: " setting updated successfully",
                    });

                    this.closeModal();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
