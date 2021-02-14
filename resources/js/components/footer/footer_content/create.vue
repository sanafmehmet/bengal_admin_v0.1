<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Footer Content Insert 
            <router-link to="/footercontent" class="btn btn-sm btn-info" id="add_new"> All Footer Content</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="footerContentInsert">
	          <div class="form-group">
	              <div class="form-row">
                   <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Language</label>
                            <select name="" v-model="form.lang" class="form-control" required>
                            <option value="0">Choose One...</option>
                            <option value="English">English</option>
                            <option value="Arabic">Arabic</option>
                            <option value="French">French</option>
							              <option value="Germany">Germany</option>
                        </select>
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
                      <label for="phone">Call Us</label>
	                  <input type="text" v-model="form.callus" class="form-control" required>
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
                       <label for="nid">Address</label>
	                  <input type="text" v-model="form.addrs" class="form-control"  required>
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
              desc:'',
              callus: '',
              addrs: '',
              userId: ''
            }
        	}
        },
        
        methods:{ 
        	footerContentInsert(){
                this.form.userId = User.id()

                axios.post('/api/footer', this.form)
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
