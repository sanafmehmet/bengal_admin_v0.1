<template>
    <div>
         <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <router-link to="/order">
                            <h1 class="font-light text-white">10000 Taka</h1>
                            <h6 class="text-white">Today Sell</h6>
                        </router-link>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                       <a href="#">
                            <h1 class="font-light text-white">50000 Taka</h1>
                            <h6 class="text-white">Today Income</h6>
                       </a>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <a href="#">
                            <h1 class="font-light text-white">2000 Taka</h1>
                            <h6 class="text-white">Today Due</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <a href="#">
                            <h1 class="font-light text-white">10000 Taka</h1>
                            <h6 class="text-white">Today Expense</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                        <h6 class="text-white">Full Width</h6>
                    </div>
                </div>
            </div> -->
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">Forms</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white">Buttons</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h6 class="text-white">Elements</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                        <h6 class="text-white">Calnedar</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                        <h6 class="text-white">Errors</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
      
    </div>
</template>

<script>
export default {
    created(){
        if(!User.loggedIn()){
            this.$router.push({name: '/'})
        }
        //this.$router.push({name: '/home'})
        //window.location.href = 'http://127.0.0.1:8001';
        //window.location.reload()
    }
}
</script>

<style scoped>
   
</style>