<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Investor Insert 
            <router-link to="/investor" class="btn btn-sm btn-info" id="add_new"> All Investor</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="investorInsert" enctype="multipart/form-data">
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
                            <option value="German">German</option>
                        </select>
                        </div>
                    </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
                       <label for="nid">Title One</label>
	                  <input type="text" v-model="form.title_one" class="form-control"  required="">
	                </div>
	               </div>
	             </div>
	          </div>
	          <div class="form-group">
	              <div class="form-row">
	             	<div class="col-md-6">
						<div class="form-label-group">
						<label for="text">Description</label>
						<textarea v-model="form.desc_one" class="form-control" cols="20" rows="3" required=""></textarea>
						</div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
                      <label for="phone">Amount</label>
	                  <input type="text" v-model="form.amnt" class="form-control"  required="">
	                </div>
	               </div>
	             </div>
	          </div>
			  <h4 style="color:orange">Upload Investor Image</h4>
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
	          </div>
              
	          <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Title Two</label>
	                  <input type="text" v-model="form.title_two" class="form-control"  required="">
	                </div>
	               </div>
	               <div class="col-md-6">
	                <div class="form-label-group">
	                  <label for="text">Description</label>
                      <textarea v-model="form.desc_two" class="form-control" cols="20" rows="3" required=""></textarea>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Year</label>
	                  <input type="number" v-model="form.year" class="form-control" required>
	                </div>
	               </div>
	             </div>
	          </div>
			
			 <hr>

              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-4">
	                <h5 style="color:orange">Item One</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(input,k) in form.items_one" :key="k">
                                <td>
                                    <input type="text" v-model="input.item_one" class="form-control" required>
                                </td>
                                
                                <td>
                                    <i class="fas fa-minus-circle" style="font-size:16px; color:red;" @click="one_remove(k)" v-show="k || ( !k && form.items_one.length > 1)"></i>
                                    <i class="fas fa-plus-circle" style="font-size:16px; color:green;" @click="one_add(k)" v-show="k == form.items_one.length-1"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
	               </div>
	               <div class="col-md-4">
					<h5 style="color:orange">Item Two</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(input,k) in form.items_two" :key="k">
                                <td>
                                    <input type="text" v-model="input.item_two" class="form-control" required>
                                </td>
                                
                                <td>
                                    <i class="fas fa-minus-circle" style="font-size:16px; color:red;" @click="two_remove(k)" v-show="k || ( !k && form.items_two.length > 1)"></i>
                                    <i class="fas fa-plus-circle" style="font-size:16px; color:green;" @click="two_add(k)" v-show="k == form.items_two.length-1"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
	               </div>
				   <div class="col-md-4">
	                <h5 style="color:orange">Item Three</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(input,k) in form.items_three" :key="k">
                                <td>
                                    <input type="text" v-model="input.item_three" class="form-control" required>
                                </td>
                                
                                <td>
                                    <i class="fas fa-minus-circle" style="font-size:16px; color:red;" @click="three_remove(k)" v-show="k || ( !k && form.items_three.length > 1)"></i>
                                    <i class="fas fa-plus-circle" style="font-size:16px; color:green;" @click="three_add(k)" v-show="k == form.items_three.length-1"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
        			title_one : '',
                    desc_one:'',
					amnt: '',
        			image:'',
                    title_two : '',
                    desc_two:'',
					year: '',
					items_one: [{
                    	item_one: ''
                	}],
					items_two: [{
                    	item_two: ''
                	}],
					items_three: [{
                    	item_three: ''
                	}],
                    userId: '',
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
			one_add(index) {
            	this.form.items_one.push({
					item_one: ''
				});
			},
			one_remove(index) {
				this.form.items_one.splice(index, 1);
			},
			two_add(index) {
            	this.form.items_two.push({
					item_two: ''
				});
			},
			two_remove(index) {
				this.form.items_two.splice(index, 1);
			},
			three_add(index) {
            	this.form.items_three.push({
					item_three: ''
				});
			},
			three_remove(index) {
				this.form.items_three.splice(index, 1);
			},
        	investorInsert(){
                this.form.userId = User.id()

        		axios.post('/api/investor', this.form)
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
