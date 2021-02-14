<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            About Us Insert 
            <router-link to="/aboutus" class="btn btn-sm btn-info" id="add_new"> All About Us</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="aboutUsInsert">
	          <div class="form-group">
	              <div class="form-row">
                   <div class="col-md-4">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Language</label>
                            <select name="" v-model="form.lang" class="form-control" required>
                            <option value="0">Choose One...</option>
                            <option value="English">English</option>
                            <option value="Arabic">Arabic</option>
                            <option value="French">French</option>
                        </select>
                        </div>
                    </div>
                   <div class="col-md-4">
	                <div class="form-label-group">
                      <label for="phone">Heading</label>
	                  <input type="text" v-model="form.heading" class="form-control" required>
	                </div>
	               </div>
	               <div class="col-md-4">
	                <div class="form-label-group">
                       <label for="nid">Title</label>
	                  <input type="text" v-model="form.title" class="form-control"  required>
	                </div>
	               </div>
	             </div>
	          </div>
              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-12">
	                <div class="form-label-group">
	                  <label for="text">Description</label>
                      <textarea v-model="form.desc" class="form-control" cols="20" rows="3" required></textarea>
	                </div>
	               </div>
	             </div>
	          </div>
              
	          <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="nid">View More</label>
	                  <input type="text" v-model="form.view_more" class="form-control"  required>
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="nid">View Profile</label>
	                  <input type="text" v-model="form.view_profile" class="form-control"  required>
	                </div>
	               </div>
	             </div>
	          </div>
              <hr>
               <button type="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
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
        			lang :'',
        			heading :'',
        			title : '',
                    desc:'',
                    view_more: '',
                    view_profile: '',
                    userId: ''
                }
        	}
        },
        
        methods:{ 
        	aboutUsInsert(){
                this.form.userId = User.id()

        		axios.post('/api/aboutus', this.form)
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
