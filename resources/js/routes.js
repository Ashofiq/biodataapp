import Home from './components/Home.vue'
import Biodata from './components/Biodata.vue'

export const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/create', component: Biodata, name: 'create' }
  ]
  