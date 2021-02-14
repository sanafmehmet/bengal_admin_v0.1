<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Footer Image Insert 
            <router-link to="/footerimage" class="btn btn-sm btn-info" id="add_new"> All Image</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="imageInsert" enctype="multipart/form-data">
              <div class="form-group">
	              <div class="form-row">

	               <div class="col-md-6">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedImage" required>
	                </div>
	               </div>
	                <div class="col-md-6">
	                	<img :src="form.image" style="height:80px; width: 100px;">
	                </div>
	             </div>
	          </div><hr>
               <button type="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
         </div>
       </div>
   </div>
</template>

<script>

    export default {
    	created(){
            if(!User.loggedIn()){
                this.$router.push({name: '/'})
            }

        },
        data(){
        	return{
        		form:{
        			image:'',
                    userId: ''
                }
        	}
        },
        
        methods:{ 	
        	onFileselectedImage(event){
        		let file=event.target.files[0];
        		if (file.size > 1048770) {
        			Notification.image_validation()
        		}else{
        			let reader = new FileReader();
        			reader.onload = event => {
        				this.form.image = event.target.result

        				//console.log(event.target.result);
        			};
        			reader.readAsDataURL(file);

        		}
            },
        	imageInsert(){
                this.form.userId = User.id()

        		axios.post('/api/footerimage', this.form)
        		.then((res) => {
        			//this.$router.push({ name: 'product' })
					//Notification.success()
					Toast.fire({
						icon: "success",
						title: "Successfully Inserted"
					});
        		})
        		.catch(error => this.errors = error.response.data.errors)
        	},
        	
        }
    }
</script>

<style>
	
#add_new{
	float: right;
}

</style>
