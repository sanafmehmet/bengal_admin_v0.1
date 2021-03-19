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
// Load About Us (Content One) files
import StoreAboutUsOne from './components/home/aboutUs/content_one/create.vue'
import AboutUsOne from './components/home/aboutUs/content_one/index.vue'

// Load About Us files
import StoreAchievement from './components/achievement/create.vue'
import Achievement from './components/achievement/index.vue'

// Load Menu Achievement files
import StoremAchievement from './components/menu_links/achievement/create.vue'
import mAchievement from './components/menu_links/achievement/index.vue'

// Load Menu Commitment files
import StoreCommitment from './components/menu_links/commitment/create.vue'
import Commitment from './components/menu_links/commitment/index.vue'

// Load Menu Career files
import StoreCareer from './components/menu_links/career/create.vue'
import Career from './components/menu_links/career/index.vue'

// Load Menu Contact Us files
import StoreContactus from './components/menu_links/contactus/create.vue'
import Contactus from './components/menu_links/contactus/index.vue'

// Load Counter files
import StoreCounter from './components/home/counter/create.vue'
import Counter from './components/home/counter/index.vue'

// Load Profit Sharing files
import StoreProfit from './components/home/profit_sharing/create.vue'
import Profit from './components/home/profit_sharing/index.vue'

// Load Partner files
import StorePartner from './components/home/partner/create.vue'
import Partner from './components/home/partner/index.vue'

// Load Export Markets files
import StoreExport from './components/home/export_markets/create.vue'
import Export from './components/home/export_markets/index.vue'

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

// Load Investor Relation files
import StoreInvestor from './components/investor/create.vue'
import Investor from './components/investor/index.vue'

// For Menu area
// News and Events files
import StoreNews from './components/news/create.vue'
import News from './components/news/index.vue'

// For Category Area
// Food Processing files
import StoreFood from './components/category/food_processing/create.vue'
import Food from './components/category/food_processing/index.vue'

// Plastic Rubber & melamine files
import StorePlastic from './components/category/plastic_melamine/create.vue'
import Plastic from './components/category/plastic_melamine/index.vue'

// Textile and Apparels files
import StoreTextile from './components/category/textile_apparels/create.vue'
import Textile from './components/category/textile_apparels/index.vue'

// Power and Energy files
import StorePower from './components/category/power_energy/create.vue'
import Power from './components/category/power_energy/index.vue'

// Hospitality Service files
import StoreHospitality from './components/category/hospitality_service/create.vue'
import Hospitality from './components/category/hospitality_service/index.vue'

// Building Material files
import StoreBuilding from './components/category/building_material/create.vue'
import Building from './components/category/building_material/index.vue'

// Infrustructure and Devlopment files
import StoreInfrustructure from './components/category/infrustructure_dev/create.vue'
import Infrustructure from './components/category/infrustructure_dev/index.vue'

// Real Estate files
import StoreRealestate from './components/category/real_estate/create.vue'
import Realestate from './components/category/real_estate/index.vue'

// Media and Entertainment files
import StoreMedia from './components/category/media_ent/create.vue'
import Media from './components/category/media_ent/index.vue'

// Bredcrumbs
import StoreBred from './components/bredcrumbs/create.vue'
import Bred from './components/bredcrumbs/index.vue'


// Load Footer files
import StoreFooterContent from './components/footer/footer_content/create.vue'
import FooterContent from './components/footer/footer_content/index.vue'
import EditFooterContent from './components/footer/footer_content//edit.vue'
import StoreFooterImage from './components/footer/footer_image/create.vue'
import FooterImage from './components/footer/footer_image/index.vue'
import Category from './components/settings/category.vue'

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
    // Register About Us (Content One) routes
    { path: '/store-aboutus-one', component:StoreAboutUsOne, name: 'store-aboutus-one'},
    { path: '/aboutus-one', component:AboutUsOne, name: 'aboutus-one'},

    // Register Counter routes
    { path: '/store-counter', component:StoreCounter, name: 'store-counter'},
    { path: '/counter', component:Counter, name: 'counter'},

    // Register Profit Sharing routes
    { path: '/store-profit', component:StoreProfit, name: 'store-profit'},
    { path: '/profit', component:Profit, name: 'profit'},

    // Register Partner routes
    { path: '/store-partner', component:StorePartner, name: 'store-partner'},
    { path: '/partner', component:Partner, name: 'partner'},

    // Register Export Markets routes
    { path: '/store-export', component:StoreExport, name: 'store-export'},
    { path: '/export', component:Export, name: 'export'},

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

    // Register Investor routes
    { path: '/store-investor', component:StoreInvestor, name: 'store-investor'},
    { path: '/investor', component:Investor, name: 'investor'},

    // Menu Area
    { path: '/store-news', component:StoreNews, name: 'store-news'},
    { path: '/news', component:News, name: 'news'},

    // Menu Achievement Area
    { path: '/store-machievement', component:StoremAchievement, name: 'store-machievement'},
    { path: '/machievement', component:mAchievement, name: 'machievement'},

    // Menu Commitment Area
    { path: '/store-commitment', component:StoreCommitment, name: 'store-commitment'},
    { path: '/commitment', component:Commitment, name: 'commitment'},

    // Menu Career Area
    { path: '/store-career', component:StoreCareer, name: 'store-career'},
    { path: '/career', component:Career, name: 'career'},

    // Menu Contact Us Area
    { path: '/store-contactus', component:StoreContactus, name: 'store-contactus'},
    { path: '/contactus', component:Contactus, name: 'contactus'},

    // Setting Area
    { path: '/category', component:Category, name: 'category'},

    // for Category
    // Food Processing Area
    { path: '/store-food', component:StoreFood, name: 'store-food'},
    { path: '/food', component:Food, name: 'food'},

    // Plastic Rubber and Melamine Area
    { path: '/store-plastic', component:StorePlastic, name: 'store-plastic'},
    { path: '/plastic', component:Plastic, name: 'plastic'},

    // Textile and Appatextile Area
    { path: '/store-textile', component:StoreTextile, name: 'store-textile'},
    { path: '/textile', component:Textile, name: 'textile'},

    // Power and Energy Area
    { path: '/store-power', component:StorePower, name: 'store-power'},
    { path: '/power', component:Power, name: 'power'},

    // Hospitality Service Area
    { path: '/store-hospitality', component:StoreHospitality, name: 'store-hospitality'},
    { path: '/hospitality', component:Hospitality, name: 'hospitality'},

    // Building Material Area
    { path: '/store-building', component:StoreBuilding, name: 'store-building'},
    { path: '/building', component:Building, name: 'building'},

    // Infrustructure & Development Area
    { path: '/store-infrustructure', component:StoreInfrustructure, name: 'store-infrustructure'},
    { path: '/infrustructure', component:Infrustructure, name: 'infrustructure'},

    // Real Estate Area
    { path: '/store-realestate', component:StoreRealestate, name: 'store-realestate'},
    { path: '/realestate', component:Realestate, name: 'realestate'},

    // Media and Entertainment Area
    { path: '/store-media', component:StoreMedia, name: 'store-media'},
    { path: '/media', component:Media, name: 'media'},

    // Bredcrumbs Area
    { path: '/store-bred', component:StoreBred, name: 'store-bred'},
    { path: '/bred', component:Bred, name: 'bred'},

    // Register Footer routes
    { path: '/store-footercontent', component:StoreFooterContent, name: 'store-footercontent'},
    { path: '/footercontent', component:FooterContent, name: 'footercontent'},
    { path: '/edit-footercontent/:id', component:EditFooterContent, name: 'edit-footercontent'},
    { path: '/store-footerimage', component:StoreFooterImage, name: 'store-footerimage'},
    { path: '/footerimage', component:FooterImage, name: 'footerimage'},
]