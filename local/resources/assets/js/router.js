import VueRouter from 'vue-router';

let routes =[
  {
    path : '/menus/create',
    components: require('./components/CreatePageMenu.vue')
  }
];

export default new VueRouter({
  routes
});
