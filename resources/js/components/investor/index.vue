<template>
    <div>
        <!-- Icon Cards-->
        <div class="row container justify-content-center">
            <div class="card col-lg-12 offset-1">
                <div class="card-header">
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                             <i class="fas fa-chart-area"></i>
                                Investor Relation
                        </div>
                        <div class="col-md-4">
                             <!-- :href="'/export-salary'" -->
                             <a class="btn btn-sm btn-success" style="color: white; float:right">Export to Excel</a>
                        </div>
                        <div class="col-md-4">
                            <router-link
                                to="/store-investor"
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
                    <form @submit.prevent="view">
                        <div class="input-group mb-2" style="width:250px; float:right">
                        <input type="text" class="form-control" v-model="search" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                    <table class="table table-light table-bordered">
                        <thead>
                           <tr>
                               <th>Name</th>
                               <th>Photo</th>
                               <th>Category</th>
                               <th>Qty</th>
                               <th>Price</th>
                               <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr v-for="product in products.data" :key="product.id">
                                <td>{{ product.product_name }}</td>
                                <td> 
                                    <img
                                        :src="product.product_image"
                                        alt="image.png"
                                        id="em_photo"
                                        style="width:50px; height:50px"
                                    />
                                </td>
                                <td>{{ product.category_name }}</td>
                                <td>{{ product.product_quantity }}</td>
                                <td>{{ product.selling_price }}</td>
                                <td>
                                    <router-link :to="{name: 'edit-product', params:{id: product.id}}" style="border-radius:3px" class="btn btn-sm btn-success"
                                        ><i class="fa fa-pencil-square-o" style="padding-right:6px" aria-hidden="true"></i>Edit</router-link>
                                    <a v-if="role == 1" @click="deleteProduct(product.id)" class="btn btn-sm btn-danger" style="color:white; border-radius:3px"
                                        ><i class="fa fa-trash-o" aria-hidden="true" style="padding-right:6px"></i>Delete</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <pagination :data="products" @pagination-change-page="view"></pagination>
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
            products: {},
            search: '',
            role: ''
        }
    },
    methods: {
        view(page=1) {
            axios.get(`/api/product?page=${page} & search=${this.search}`)
                .then(({data}) => {
                    this.products = data
                    //console.log(this.products)
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

