<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a
                                        class="nav-link active"
                                        data-toggle="pill"
                                        href="#personal-information"
                                    >
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#chang-pwd"
                                    >
                                        Change Password
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#emailandsms"
                                    >
                                        Email and SMS
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#manage-contact"
                                    >
                                        Manage Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                                            Personal Information
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div
                                        class="form-group row align-items-center"
                                    >
                                        <div class="col-md-12">
                                            <div class="profile-img-edit">
                                                <img
                                                    class="profile-pic"
                                                   :src="'/img/admin/' + user.image"
                                                    alt="profile-pic"
                                                />
                                                <div class="p-image">
                                                    <i
                                                        class="ri-pencil-line upload-button"
                                                    ></i>
                                                    <input
                                                        class="file-upload"
                                                        type="file"
                                                        v-on:change="onChange"
                                                        accept="image/*"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="form-group col-sm-12">
                                            <label for="fname"
                                                >First Name:</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="fname"
                                                v-model="user.first_name"
                                            />
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="lname"
                                                >Last Name:</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="lname"
                                                v-model="user.last_name"
                                            />
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="phone">Phone</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="phone"
                                                v-model="user.phone"
                                            />
                                        </div>
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-primary mr-2"
                                        @click="updateProfile()"
                                    >
                                        Submit
                                    </button>
                                    <button
                                        type="reset"
                                        class="btn iq-bg-danger"
                                    >
                                        Cancle
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="chang-pwd"
                            role="tabpanel"
                        >
                            <div class="iq-card">
                                <div
                                    class="iq-card-header d-flex justify-content-between"
                                >
                                    <div class="iq-header-title">
                                        <h4 class="card-title">
                                            Change Password
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                   
                                        <div class="form-group">
                                            <label for="cpass"
                                                >Current Password:</label
                                            >
                                            <a
                                                href="javascripe:void();"
                                                class="float-right"
                                                >Forgot Password</a
                                            >
                                            <input
                                                type="Password"
                                                class="form-control"
                                                id="cpass"
                                                v-model="currentPassword"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="npass"
                                                >New Password:</label
                                            >
                                            <input
                                                type="Password"
                                                class="form-control"
                                                id="npass"
                                                v-model="newPassword"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass"
                                                >Verify Password:</label
                                            >
                                            <input
                                                type="Password"
                                                class="form-control"
                                                id="vpass"
                                                v-model="verifyPassword"
                                            />
                                        </div>
                                        <button
                                            type="button"
                                            class="btn btn-primary mr-2"
                                            @click="changePassword()"
                                        >
                                            Submit
                                        </button>
                                        <button
                                            type="reset"
                                            class="btn iq-bg-danger"
                                        >
                                            Cancle
                                        </button>
                                   
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="emailandsms"
                            role="tabpanel"
                        >
                            <div class="iq-card">
                                <div
                                    class="iq-card-header d-flex justify-content-between"
                                >
                                    <div class="iq-header-title">
                                        <h4 class="card-title">
                                            Email and SMS
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div
                                            class="form-group row align-items-center"
                                        >
                                            <label
                                                class="col-md-3"
                                                for="emailnotification"
                                                >Email Notification:</label
                                            >
                                            <div
                                                class="col-md-9 custom-control custom-switch"
                                            >
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="emailnotification"
                                                    checked=""
                                                />
                                                <label
                                                    class="custom-control-label"
                                                    for="emailnotification"
                                                ></label>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group row align-items-center"
                                        >
                                            <label
                                                class="col-md-3"
                                                for="smsnotification"
                                                >SMS Notification:</label
                                            >
                                            <div
                                                class="col-md-9 custom-control custom-switch"
                                            >
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="smsnotification"
                                                    checked=""
                                                />
                                                <label
                                                    class="custom-control-label"
                                                    for="smsnotification"
                                                ></label>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group row align-items-center"
                                        >
                                            <label class="col-md-3" for="npass"
                                                >When To Email</label
                                            >
                                            <div class="col-md-9">
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email01"
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email01"
                                                        >You have new
                                                        notifications.</label
                                                    >
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email02"
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email02"
                                                        >You're sent a direct
                                                        message</label
                                                    >
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email03"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email03"
                                                        >Someone adds you as a
                                                        connection</label
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group row align-items-center"
                                        >
                                            <label class="col-md-3" for="npass"
                                                >When To Escalate Emails</label
                                            >
                                            <div class="col-md-9">
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email04"
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email04"
                                                    >
                                                        Upon new order.</label
                                                    >
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email05"
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email05"
                                                    >
                                                        New membership
                                                        approval</label
                                                    >
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="email06"
                                                        checked=""
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="email06"
                                                    >
                                                        Member
                                                        registration</label
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary mr-2"
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
                        <div
                            class="tab-pane fade"
                            id="manage-contact"
                            role="tabpanel"
                        >
                            <div class="iq-card">
                                <div
                                    class="iq-card-header d-flex justify-content-between"
                                >
                                    <div class="iq-header-title">
                                        <h4 class="card-title">
                                            Manage Contact
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cno"
                                                >Contact Number:</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="cno"
                                                value="001 2536 123 458"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="email"
                                                value="nikjone@demo.com"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="url">Url:</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="url"
                                                value="https://getbootstrap.com"
                                            />
                                        </div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary mr-2"
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
    props: ["id" ],
    data() {
        return {
            user: {
                first_name: "",
                last_name: "",
                image: "",
                phone: "",
                email: "",
                password: "",
            },
            imgPreview: null,
            currentPassword: "",
            newPassword: "",
            verifyPassword: "",
            errors: [],
        };
    },

    created() {
        this.getInfo();
    },

    methods: {
        onChange(e) {
            this.user.image = e.target.files[0];
            let reader = new FileReader();
            reader.addEventListener(
                "load",
                function () {
                    this.imgPreview = reader.result;
                }.bind(this),
                false
            );

            if (this.user.image) {
                if (/\.(jpe?g|png|gif)$/i.test(this.user.image.name)) {
                    reader.readAsDataURL(this.user.image);
                }
            }
        },
        getInfo() {
            axios
                .get(`/api/admin/profile/${this.$props.id}`)
                .then((response) => {
                    console.log(response.data);
                    this.user = response.data;
                    this.imgPreview = this.user.image;
                    if (this.user.image) {
                        if (/\.(jpe?g|png|gif)$/i.test(this.user.image.name)) {
                            reader.readAsDataURL(this.user.image);
                        }
                    }
                })
                .catch((err) => console.log(err));
        },
        changePassword() {
         const formData = new FormData();
         formData.append("currentPassword", this.currentPassword);
         formData.append("newPassword", this.newPassword);
         formData.append("verifyPassword", this.verifyPassword);

           
            axios
                .post("/api/admin/profile/changepassword/"+this.user.id,formData )
                .then( (res) =>{
                   console.log();
                    Toast.fire({
                        icon: "success",
                        title: " user updated successfully",
                    });
                    this.currentPassword="",
                      this.newPassword="",
                        this.verifyPassword=""
                }
                )
                .catch((err) => console.log(err));
        },
        updateProfile() {
            let existingObj = this;
            const config = {
                headers: {
                    "content-type": "multipart/form-data",
                },
            };

            const formData = new FormData();
            formData.append("first_name", this.user.first_name);
            formData.append("last_name", this.user.last_name);
            formData.append("phone", this.user.phone);
            formData.append("email", this.user.email);
            formData.append("password", this.user.password);
            formData.append("image", this.user.image);
            console.log(this.user);
            axios
                .post(
                    "/api/admin/profile/update/" + this.user.id,
                    formData,
                    config
                )
                .then((response) => {
                    console.log();
                    
                    Toast.fire({
                        icon: "success",
                        title: " user updated successfully",
                    });
                    this.getuser();
                    this.closeModal();
                })
                .catch( (error) =>{
                   console.log(error);
                });
        },
    },
};
</script>
