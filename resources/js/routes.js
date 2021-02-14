import Login from './components/auth/login.vue'
import Register from './components/auth/register.vue'
import Logout from './components/auth/logout.vue'
import Home from './components/home.vue'

// Load Menu files
import StoreDocument from './components/home/document/create.vue'
import Document from './components/home/document/index.vue'

// Load Document files
import StoreMenu from './components/menu/create.vue'
import Menu from './components/menu/index.vue'

// Load About Us files
import StoreAboutUs from './components/home/aboutUs/create.vue'
import AboutUs from './components/home/aboutUs/index.vue'
import EditAboutUs from './components/home/aboutUs/edit.vue'
import ViewAboutUs from './components/home/aboutUs/view.vue'

// Load Tab files
import StoreTab from './components/home/tabs/create.vue'
import Tab from './components/home/tabs/index.vue'
import EditTab from './components/home/tabs/edit.vue'
import ViewTab from './components/home/tabs/view.vue'

// Load Services files
import StoreService from './components/home/services/create.vue'
import Service from './components/home/services/index.vue'
import EditService from './components/home/services/edit.vue'
import ViewService from './components/home/services/view.vue'

// Load Footer files
import StoreFooterContent from './components/footer/footer_content/create.vue'
import FooterContent from './components/footer/footer_content/index.vue'
import EditFooterContent from './components/footer/footer_content//edit.vue'
import StoreFooterImage from './components/footer/footer_image/create.vue'
import FooterImage from './components/footer/footer_image/index.vue'

export const routes = [
    { path: '/', component:Login, name: '/'},
    { path: '/home', component: Home, name: 'home' },
    { path: '/register', component:Register, name: 'register'},
    { path: '/logout', component: Logout, name: 'logout' },

    // Register Menu routes
    { path: '/store-menu', component:StoreMenu, name: 'store-menu'},
    { path: '/menu', component:Menu, name: 'menu'},

    // Register Document routes
    { path: '/store-document', component:StoreDocument, name: 'store-document'},
    { path: '/document', component:Document, name: 'document'},


    // Register About Us routes
    { path: '/store-aboutus', component:StoreAboutUs, name: 'store-aboutus'},
    { path: '/aboutus', component:AboutUs, name: 'aboutus'},
    { path: '/edit-aboutus/:id', component:EditAboutUs, name: 'edit-aboutus'},
    { path: '/view-aboutus/:id', component:ViewAboutUs, name: 'view-aboutus'},

    // Register Tab routes
    { path: '/store-tab', component:StoreTab, name: 'store-tab'},
    { path: '/tab', component:Tab, name: 'tab'},
    { path: '/edit-tab/:id', component:EditTab, name: 'edit-tab'},
    { path: '/view-tab/:id', component:ViewTab, name: 'view-tab'},

    // Register Service routes
    { path: '/store-service', component:StoreService, name: 'store-service'},
    { path: '/service', component:Service, name: 'service'},
    { path: '/edit-service/:id', component:EditService, name: 'edit-service'},
    { path: '/view-service/:id', component:ViewService, name: 'view-service'},

    // Register Footer routes
    { path: '/store-footercontent', component:StoreFooterContent, name: 'store-footercontent'},
    { path: '/footercontent', component:FooterContent, name: 'footercontent'},
    { path: '/edit-footercontent/:id', component:EditFooterContent, name: 'edit-footercontent'},
    { path: '/store-footerimage', component:StoreFooterImage, name: 'store-footerimage'},
    { path: '/footerimage', component:FooterImage, name: 'footerimage'},
]