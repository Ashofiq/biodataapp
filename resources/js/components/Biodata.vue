<template>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Biodata</h4>
                        </div>
                        <div class="card-body">
                             <form @submit.prevent="saveBiodata" enctype="multipart/form-data">
                         
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
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
                                                    <input type="text" v-model.number="form.phone" class="form-control" name="phone" placeholder="Enter phone" >
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
                                                    <label v-for="(gender, m) in genders" :key="m">
                                                        <input type="radio" v-model="form.gender" :value="gender.name"> {{gender.name}}
                                                    </label>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="form-label">Skills</div>
                                                    <ul>
                                                        <li v-for="(skill, m) in form.skills" :key="m">
                                                            <input type="checkbox" v-model="skill.selected" :value="skill.name"> {{skill.name}}
                                                        </li>
                                                    </ul>
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

                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" @change="onFileSelected">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="custom-file col-md-6">
                                                        <img :src="form.photo" class="avatar avatar-xl mb-3 avatar-rounded">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                             <button type="submit" class="btn btn-primary ms-auto">Save Biodata</button>

                            </form>
                        
                        </div>
                    </div>
                </div>

                

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Educational Info</h3>
                                <button type="button" @click="addNewEducationRow(event)" class="btn btn-primary btn-sm ms-auto" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Institute</th>
                                                <th>Pass Year</th>
                                                <th>Result</th>
                                                <th>Out Of</th>
                                                <th>
                                                   
                                                </th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <tr v-for="(educationalForm, k) in educationalForms" :key="k">
                                            <td><textarea class="educationInput" v-model="educationalForm.institute" type="text" name="institute" rows="1"></textarea></td>
                                            <td><input class="educationInput" v-model="educationalForm.passingYear"  type="text" name="passingYear"> </td>
                                            <td><input class="educationInput" v-model="educationalForm.result"  type="text" name="result"></td>
                                            <td><input class="educationInput" v-model="educationalForm.outOf"  type="text" name="outOf"></td>
                                            <td scope="row" class="trashIconContainer">
                                                <i class="far fa-trash-alt" @click="deleteEducationalRow(k, educationalForm)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                                                </i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <br>
                         <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Family Info</h3>
                                <button type="button" @click="addNewFamilyRow(event)" class="btn btn-primary btn-sm ms-auto" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Relation</th>
                                                <th>Name</th>
                                                <th>Ocupation</th>
                                                <th>
                                                  
                                                </th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <tr v-for="(familyForm, index) in familyForms" :key="index">
                                            <td><textarea class="educationInput" v-model="familyForm.relation" type="text" name="relation" rows="1"></textarea></td>
                                            <td><input class="educationInput" v-model="familyForm.name"  type="text" name="name"> </td>
                                            <td><input class="educationInput" v-model="familyForm.ocupation"  type="text" name="ocupation"></td>
                                            <td scope="row" class="trashIconContainer">
                                                <i class="far fa-trash-alt" @click="deleteFamilyRow(index, familyForm)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                                                </i>
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

        
    </div>
</template>


<script>
   

  export default {
   
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
          skills: [
            {name: 'Laravel', selected: true}, 
            {name: 'Api', selected: false},
            {name: 'Codeigniter', selected: false},
            {name: 'Ajax', selected: false},
            {name: 'Vue js', selected: false},
            {name: 'Mysql', selected: false},
        ],
          weight: null,
          religion: null,
          presantAddress: null,
          permanentAddress: null,
          hobbie :null,
          educationalForms : null,
          familyForms : null
        },
        genders: [{name: 'Male', selected: true}, {name: 'Female', selected: false}],
        
        educationalForms: [{
            institute: null,
            passingYear: null,
            result: null,
            outOf: null
        }],
        familyForms:[{
            relation: null,
            name : null,
            ocupation: null
        }],
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
            this.form.educationalForms = this.educationalForms;
            this.form.familyForms = this.familyForms;

            axios.post('/api/biodata/create', this.form)
            .then(response1 =>{ 
                console.log(response1); 
                Notification.success('Successfully create');

                this.$router.push({name: 'home'})
            })
            .catch(error =>
                this.errors = error.response.data.errors
            )
        },

        addNewEducationRow() {
            console.log('dd');
            this.educationalForms.push({
                institute: null,
                passingYear: null,
                result: null,
                outOf: null
            });
        },
        deleteEducationalRow(index, educationalForm) {
            var idx = this.educationalForms.indexOf(educationalForm);
            console.log(idx, index);
            if (idx > -1) {
                this.educationalForms.splice(idx, 1);
            }
        },

        addNewFamilyRow() {
            this.familyForms.push({
                relation: null,
                name : null,
                ocupation: null
            });
        },

        deleteFamilyRow(index, familyForm) {
            var idx = this.familyForms.indexOf(familyForm);
            console.log(idx, index);
            if (idx > -1) {
                this.familyForms.splice(idx, 1);
            }
        },
    }
  }
</script>


<style scoped>
.educationInput {
    width: 100px;
}
</style>