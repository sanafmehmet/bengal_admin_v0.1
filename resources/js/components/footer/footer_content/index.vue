<template>
    <div>
        <!-- Icon Cards-->
        <div class="row container justify-content-center">
            <div class="card col-lg-12 offset-1">
                <div class="card-header">
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                             <i class="fas fa-chart-area"></i>
                                Footer Content
                        </div>
                        <div class="col-md-4">
                             <!-- :href="'/export-salary'" -->
                             <a class="btn btn-sm btn-success" style="color: white; float:right">Export to Excel</a>
                        </div>
                        <div class="col-md-4">
                            <router-link
                                to="/store-footercontent"
                                class="btn btn-sm btn-info"
                                id="export"
                                style="float:right"
                            >
                                Add New</router-link
                            >
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-light table-bordered">
                        <thead>
                           <tr>
                               <th>Description</th>
                               <th>Call Us</th>
                               <th>Address</th>
                               <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr v-for="product in products" :key="product.id">
                                <td>{{ product.desc }}</td>
                                <td>{{ product.callus }}</td>
                                <td>{{ product.addrs }}</td>
                                <td>
                                    <router-link :to="{name: 'edit-footercontent', params:{id: product.id}}" style="border-radius:3px" class="btn btn-sm btn-success"
                                        ><i class="fa fa-pencil-square-o" style="padding-right:6px" aria-hidden="true"></i>Edit</router-link>
                                    <a v-if="role == 1" @click="deleteProduct(product.id)" class="btn btn-sm btn-danger" style="color:white; border-radius:3px"
                                        ><i class="fa fa-trash-o" aria-hidden="true" style="padding-right:6px"></i>Delete</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
 
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        this.view()
        this.role = User.role()
    },
    data() {
        return {
            products: [],
            role: ''
        }
    },
    methods: {
        view() {
            axios.get('/api/footer')
                .then(({data}) => {
                    this.products = data
                    console.log(this.products)
                })
        },
        // searchProduct(){
        //     axios.get('/api/product?search=' + this.search)
        //         .then(({data}) => {
        //             this.products = data
        //             //console.log(data.data)
        //         })
        // },
        deleteProduct(id){
            alert(id)
        }
    }
}
</script>

