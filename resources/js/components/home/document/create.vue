<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Document Insert 
            <router-link to="/document" class="btn btn-sm btn-info" id="add_new"> All Document</router-link>
          </div>
          <div class="card-body">
            <h3 style="color:orange">Document Area</h3>
            <form @submit.prevent="documentInsert">
	          <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="exampleFormControlSelect1">Language</label>
                        <select name="" v-model="form.lang" class="form-control" required>
                          <option value="0">Choose One...</option>
                          <option value="English">English</option>
                          <option value="Arabic">Arabic</option>
                          <option value="French">French</option>
                          <option value="Germany">German</option>
                        </select>
                      </div>
                      
                  </div>
                 
                    <div class="col-md-6">
                    <div class="form-label-group">
                      <label for="phone">Month & Year</label>
                      <input type="month" v-model="form.ym" placeholder="Enter Month & Year" class="form-control" required>
                    </div>
                  </div>
                
              </div>
	          </div>
             <div class="form-group">
              <div class="form-row">
                  <div class="col-md-5">
                    <div class="form-label-group">
                      <label for="phone">Title</label>
                      <input type="text" v-model="form.title" placeholder="Enter title" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-label-group">
                      <label for="phone">Description</label>
                      <textarea v-model="form.desc" placeholder="Enter Description" name="" id="" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                  </div>
               
              </div>
	          </div>
         
            <h3 style="color:orange">Upload Document Image</h3>
            <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-4">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedImage" required>
	                </div>
	               </div>
	                <div class="col-md-5">
	                	<img :src="form.image" style="height:80px; width: 100px;">
	                </div>
                  <div class="col-md-3">
	                <button type="submit" class="btn btn-success">Submit</button>
	                </div>
	             </div>
	            </div>
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
              fileFor: 'Document',
              lang :'',
              ym: '',
              title: '',
              desc: '',
              userId: '',
              image: ''
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
        	documentInsert(){
            this.form.userId = User.id()
            axios.post('/api/home', this.form)
            .then(({data}) => {

              Toast.fire({
                icon: "success",
                title: "Successfully Inserted"
              });
        		})
        		.catch(error => this.errors = error.response.data.errors)
          }
        }
    }
</script>

<style>
	
#add_new{
	float: right;
}

</style>
