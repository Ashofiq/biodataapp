<template>
    <div class="page-body">
        <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Biodata List</h3>

                     <div class="ms-auto text-muted">
                        Search:
                        <div class="ms-2 d-inline-block">
                            <input v-model="searchTerm" type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(biodata, index) in filterSearch" :key="biodata.id">
                        <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <!-- <span class="avatar me-2">{{ biodata.user_photo }}</span> -->
                             
                              <img :src="imageUrl(biodata.photo)" class="avatar me-2">
                              <div class="flex-fill">
                                <div class="font-weight-medium">{{ biodata.name }}</div>
                                <div class="text-muted"><a href="#" class="text-reset">{{ biodata.email }}</a></div>
                              </div>
                            </div>
                          </td>
                        <td>{{ biodata.phone }}</td>
                        <td>{{ biodata.presantAddress }}</td>
                        <td>{{ biodata.dob }}</td>
                        <td class="text-end">
                            <a @click="deleteBiodata(biodata.id, index)" class="btn btn-danger btn-sm">Delete</a>
                            <router-link :to="{name: 'edit', params: {id: biodata.id}}" class="btn btn-primary btn-sm">Edit</router-link>
                        </td>
                    </tr>
                   
                    </tbody>
                </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    
  export default {
    created(){
      this.allBiodata()
    },

    data() {
      return {
        biodatas:[],
        searchTerm: ''
      }
    },

    computed:{
      filterSearch(){
        return this.biodatas.filter(biodata => {
          return biodata.name.match(this.searchTerm)
        })
      }
    },

    methods:{
      allBiodata(){
        axios.get('/api/biodata/list', )
        .then(data =>{
          this.biodatas = data.data.data.biodatas
          console.log(this.biodatas);
        })
        .catch()
      },

      imageUrl(name){
        if (name != '') {
          return import.meta.env.VITE_APP_BASE_URL+ 'storage/images/' + name
        }
        return 'https://pic.onlinewebfonts.com/svg/img_550783.png';
      },

      deleteBiodata(id, index){
        
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
             axios.delete('api/biodata/'+id)
            .then(data =>{
              this.biodatas = data.data
              console.log(data);
            })
            .catch()
            this.biodatas.splice(index, 1)
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      }
    }
  }
</script>
