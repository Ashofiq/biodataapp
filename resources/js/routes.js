import Home from './components/Home.vue'
import Biodata from './components/Biodata.vue'
import ListBiodata from './components/ListBiodata.vue'
import EditBiodata from './components/EditBiodata.vue'

export const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/create', component: Biodata, name: 'create' },
    { path: '/list', component: ListBiodata, name: 'list' },
    { path: '/edit/:id', component: EditBiodata, name: 'edit' }
  ]
  