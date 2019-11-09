import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import About from '@/js/components/About';
import ImageuploadComponent from '@/js/components/ImageuploadComponent';
import ListProducts from '@/js/components/products/ListProducts';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/image',
            'name': 'imageuploadcomponent',
            component: ImageuploadComponent
        },
        {
            path: '/products',
            name: 'listproducts',
            component: ListProducts
        }
    ]
});

export default router;