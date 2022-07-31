<template>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Add Biodata
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">

                    <form @submit.prevent="saveBiodata" enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Add Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                        
                                            <div class="mb-3">
                                                <label class="form-label required">Name</label>
                                                <input type="text" class="form-control" v-model="form.name"  name="name" placeholder="Input  name" required>
                                                <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required">Nickname</label>
                                                <input type="text" v-model="form.nickname" class="form-control" name="nickname" placeholder="Input nickname" >
                                                <small class="text-danger" v-if="errors.nickname">{{ errors.nickname[0] }}</small>

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required">Email</label>
                                                <input type="text" v-model="form.email" class="form-control" name="email" placeholder="Enter email" >
                                                <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label required">phone</label>
                                                <input type="text" v-model="form.phone" @keyup="checkPhoneNumber"  class="form-control" name="phone" placeholder="Enter phone" >
                                                <small class="text-danger" v-if="errors.phone">{{ errors.phone[0] }}</small>

                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Contact No</label>
                                                <input type="text" v-model="form.contactNo" class="form-control" name="contactNo" placeholder="Enter Contact No">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Date Of Birth</label>
                                                <input type="date" name="dob"  v-model="form.dob" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-label">Gender</div>
                                                <select class="form-select" name="gender" v-model="form.gender">
                                                    <option disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-label">Religion</div>
                                                <select class="form-select" name="religion" v-model="form.religion">
                                                    <option disabled selected>Select Religion</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Cristian">Cristian</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Height</label>
                                                <input type="text" class="form-control" v-model="form.height" name="height" >
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Height</label>
                                                <input type="text" class="form-control" v-model="form.weight" name="weight" >
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Presant Address</label>
                                                <input type="text" class="form-control" v-model="form.presantAddress" name="presantAddress" >
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Permanent Address</label>
                                                <input type="text" class="form-control" v-model="form.permanentAddress" name="permanentAddress" >
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Hobbies</label>
                                                <input type="text" class="form-control" v-model="form.hobbie" name="hobbie" >
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-vcenter card-table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th class="w-1"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td>Maryjo Lebarree</td>
                                                    <td class="text-muted">
                                                        Civil Engineer, Product Management
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                                                    <td class="text-muted">
                                                        User
                                                    </td>
                                                    <td>
                                                        <a href="#">Edit</a>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Egan Poetz</td>
                                                    <td class="text-muted">
                                                        Research Nurse, Engineering
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                                                    <td class="text-muted">
                                                        Admin
                                                    </td>
                                                    <td>
                                                        <a href="#">Edit</a>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Kellie Skingley</td>
                                                    <td class="text-muted">
                                                        Teacher, Services
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                                                    <td class="text-muted">
                                                        User
                                                    </td>
                                                    <td>
                                                        <a href="#">Edit</a>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Christabel Charlwood</td>
                                                    <td class="text-muted">
                                                        Tax Accountant, Engineering
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                                                    <td class="text-muted">
                                                        Owner
                                                    </td>
                                                    <td>
                                                        <a href="#">Edit</a>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Haskel Shelper</td>
                                                    <td class="text-muted">
                                                        Staff Scientist, Legal
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                                                    <td class="text-muted">
                                                        Admin
                                                    </td>
                                                    <td>
                                                        <a href="#">Edit</a>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">Save Company</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
</template>


<script>
    
  export default {
    created(){
    //   if (true) {
    //     this.$router.push({name: '/'})
    //   }
    },
    data() {
      return {
        form: {
          name:null,
          nickname: null,
          email: null,
          phone: null,
          contackNo: null,
          dob: null,
          gender: null,
          height: null,
          weight: null,
          religion: null,
          presantAddress: null,
          permanentAddress: null,
          hobbie :null
        },
        errors: {}
      }
    },

    methods:{
      onFileSelected(event){

        const file = event.target.files[0]
        console.log(file.size);
        if (file.size > 1048770) {
          Notification.warning('Image Less then 1 MB')
        }else{
          let render = new FileReader();
          render.onload = event => {
            this.form.photo = event.target.result
          };

          render.readAsDataURL(file)
        }

        
      },

      saveBiodata(){
        console.log(this.form);
         axios.post('/api/v1/biodata/create', this.form)
          .then(response1 =>{ 
            console.log(response1); 
            Notification.success('Successfully create');

            this.$router.push({name: '/'})
          })
          .catch(error =>
            this.errors = error.response.data.errors
            
          )
      },

      checkPhoneNumber(event){
        const value = event.target.value
        if (value.length > 11) {
            this.errors.phone = 'phone';
        }
        console.log(value.length);
      }
    }

    
  }
</script>
