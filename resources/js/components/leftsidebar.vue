<template>
<div>
    <aside class="left-sidebar" data-sidebarbg="skin5" id="sidebar" v-show="$route.path === '/' ? false : true ">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item">
                        <router-link to="/home" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></router-link>
                    </li>

                    <li class="sidebar-item">
                        <router-link to="/bred" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Bredcrumbs</span></router-link>
                    </li>
                    <!-- 
                    <li class="sidebar-item">
                        <router-link to="/product" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Product</span></router-link>
                    </li>

                    <li class="sidebar-item">
                        <router-link to="/project" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Project</span></router-link>
                    </li> -->
                    <!-- 
                    <li class="sidebar-item">
                        <router-link to="/tab" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Tabs</span></router-link>
                    </li>

                    <li class="sidebar-item">
                        <router-link to="/tabs" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Tabs View</span></router-link>
                    </li>
                    -->
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Menu </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/menu" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Menu & Images</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/achievement" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Achievement</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/commitment" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Commitment</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/career" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Career</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/news" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">News & Events</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/investor" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Investor Relation</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/machievement" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Menu Achievement</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/contactus" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Contact Us</span></router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Home </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/aboutus" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">About Us</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/counter" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Counter</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/profit" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Profit Share</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/partner" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Partner</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/export" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Export Markets</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/document" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Document</span></router-link>
                            </li>
                           
                            <li class="sidebar-item">
                                <router-link to="/tab" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Tabs</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/service" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Services</span></router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">About Us </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/aboutus-one" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Content One</span></router-link>
                            </li>
                            <!-- <li class="sidebar-item">
                                <router-link to="/footerimage" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Footer Image</span></router-link>
                            </li> -->
                           
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Settings </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/category" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Category</span></router-link>
                            </li>
                            <!-- <li class="sidebar-item">
                                <router-link to="/footerimage" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Footer Image</span></router-link>
                            </li> -->
                           
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Category </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/food" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Food Processing</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/plastic" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Plastic & Melamine</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/textile" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Textile & Apparels</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/hospitality" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Hospitality Service</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/infrustructure" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Infrustructure</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/realestate" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Real Estate</span></router-link>
                            </li>
                             <li class="sidebar-item">
                                <router-link to="/media" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Media & Entertainment</span></router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Footer </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/footercontent" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Footer Content</span></router-link>
                            </li>
                            <li class="sidebar-item">
                                <router-link to="/footerimage" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Footer Image</span></router-link>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- <li v-if="enableRequisition" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Requisition </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <router-link to="/store-requisition" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span id="spanTag" class="hide-menu"> Add Requisition </span></router-link>
                            </li>
                           
                        </ul>
                    </li> -->

                    <!-- <li v-if="enableClient" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Client </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           
                            <li class="sidebar-item">
                                <router-link to="/client" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span id="spanTag" class="hide-menu">All Client </span></router-link>
                            </li>
                        </ul>
                    </li>
                    <li v-if="enableJobOrder" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Job Orders </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           
                            <li class="sidebar-item">
                                <router-link to="/joborder" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span id="spanTag" class="hide-menu">All Job Order </span></router-link>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li v-if="role == 5 || role == 6" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Estimate</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            
                            <li class="sidebar-item">
                                <router-link to="/estimate" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span id="spanTag" class="hide-menu">All Estimate </span></router-link>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li v-if="enablePaymentVoucher" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Payment Voucher</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            
                            <li class="sidebar-item">
                                <router-link to="/paymentvoucher" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span id="spanTag" class="hide-menu">All Voucher </span></router-link>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li v-if="enableSetting" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Settings </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li v-if="role == 5 || role == 1" id="department" class="sidebar-item">
                                <router-link to="/department" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span id="spanTag" class="hide-menu">Department </span></router-link>
                            </li>
                            <li v-if="role == 5 || role == 1" id="designation" class="sidebar-item">
                                <router-link to="/designation" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span id="spanTag" class="hide-menu">Designation </span></router-link>
                            </li>
                            <li v-if="role == 1" id="user" class="sidebar-item">
                                <router-link to="/user" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span id="spanTag" class="hide-menu">User </span></router-link>
                            </li>
                        </ul>
                    </li> -->

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
</div>
</template>

<script>
export default {

    mounted() {
        // if (!User.loggedIn()) {
        //     this.$router.push({
        //         name: '/'
        //     })
        // }

    },
    data() {
        return {
            role: '',
            enableSalary: true,
            enableClient: true,
            enableJobOrder: true,
            enableEstimate: true,
            enableConveyance: true,
            enableRequisition: true,
            enablePaymentVoucher: true,
            enableSetting: true
        }
    },
    methods: {

       

    }
}
</script>

<style scoped>
#spanTag {
    color: chocolate
}

li:hover {
    background-color: darkslategray;
}
</style>
