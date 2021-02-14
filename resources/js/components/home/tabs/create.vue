<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Tab Insert 
            <router-link to="/tab" class="btn btn-sm btn-info" id="add_new"> All Tab</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="tabInsert" enctype="multipart/form-data">
                <div class="form-group">
	              <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Language</label>
                            <select name="" v-model="form.lang" class="form-control" required>
                            <option value="0">Choose One...</option>
                            <option value="English">English</option>
                            <option value="Bangla">Bangla</option>
                            <option value="Arabic">Arabic</option>
                            <option value="French">French</option>
                        </select>
                        </div>
                    </div>
	                <div class="col-md-6">
	                  <div class="form-group">
					    <label for="exampleFormControlSelect1">Tab Name</label>
					     <select name="" v-model="form.tab" class="form-control" required>
                            <option value="0">Choose One...</option>
                            <option value="Polymer">Polymer</option>
                            <option value="Romania">Romania</option>
                            <option value="Cement">Cement</option>
                            <option value="RTV">RTV</option>
                            <option value="Garments">Garments</option>
                        </select>
					  </div>
	               </div>
	             </div>
	          </div>
	          <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
                       <label for="nid">Title</label>
	                  <input type="text" v-model="form.title" class="form-control"  required="">
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="phone">Sort Title</label>
	                  <input type="text" v-model="form.sort_title" class="form-control"  required="">
	                </div>
	               </div>
	             </div>
	          </div>
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
              
	          <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="nid">Sub Title</label>
	                  <input type="text" v-model="form.sub_title" class="form-control"  required="">
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
	                  <label for="text">Description</label>
                      <textarea v-model="form.desc" class="form-control" cols="20" rows="3" required=""></textarea>
	                </div>
	               </div>
	             </div>
	          </div>
              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedSubImage" required>
	                </div>
	               </div>
	                <div class="col-md-6">
	                	<img :src="form.sub_image" style="height:80px; width: 100px;">
	                </div>
	             </div>
	          </div>
              <hr>
               <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="nid">Sub Title Two</label>
	                  <input type="text" v-model="form.sub_title_two" class="form-control"  required="">
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
	                  <label for="text">Description</label>
                      <textarea v-model="form.desc_two" class="form-control" cols="20" rows="3" required=""></textarea>
	                </div>
	               </div>
	             </div>
	          </div>
              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-6">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedSubImageTwo" required>
	                </div>
	               </div>
	                <div class="col-md-6">
	                	<img :src="form.sub_image_two" style="height:80px; width: 100px;">
	                </div>
	             </div>
	          </div>
				<hr>
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
        			lang :'',
        			tab :'',
        			title : '',
                    sort_title:'',
        			image:'',
                    sub_title:'',
                    desc:'',
					sub_image: '',
					sub_title_two:'',
                    desc_two:'',
                    sub_image_two: '',
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
            onFileselectedSubImage(event){
        		let file=event.target.files[0];
        		if (file.size > 1048770) {
        			Notification.image_validation()
        		}else{
        			let reader = new FileReader();
        			reader.onload = event => {
        				this.form.sub_image = event.target.result

        				//console.log(event.target.result);
        			};
        			reader.readAsDataURL(file);

        		}
			},
			onFileselectedSubImageTwo(event){
        		let file=event.target.files[0];
        		if (file.size > 1048770) {
        			Notification.image_validation()
        		}else{
        			let reader = new FileReader();
        			reader.onload = event => {
        				this.form.sub_image_two = event.target.result

        				//console.log(event.target.result);
        			};
        			reader.readAsDataURL(file);

        		}
        	},
        	tabInsert(){
                this.form.userId = User.id()

        		axios.post('/api/tab', this.form)
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
