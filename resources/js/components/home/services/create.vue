<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Service Insert 
            <router-link to="/service" class="btn btn-sm btn-info" id="add_new"> All Service</router-link>
          </div>
          <div class="card-body">
          	  <form @submit.prevent="serviceInsert">
	          <div class="form-group">
	              <div class="form-row">
                   <div class="col-md-3">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Language</label>
                            <select name="" v-model="form.lang" class="form-control" required>
                            <!-- <option value="0">Choose One...</option> -->
                            <option value="English">English</option>
                            <option value="Arabic">Arabic</option>
                            <option value="French">French</option>
							<option value="German">German</option>
                        </select>
                        </div>
                    </div>
                   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="phone">Heading</label>
	                  <input type="text" v-model="form.heading" class="form-control" required>
	                </div>
	               </div>
	               <div class="col-md-3">
	                <div class="form-label-group">
                       <label for="nid">Title</label>
	                  <input type="text" v-model="form.title" class="form-control"  required>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Case Study</label>
	                  <input type="text" v-model="form.case_study" class="form-control"  required>
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
              <h5 style="color:orange">Description Items</h5>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Items Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(input,k) in form.desc_items" :key="k">
							<td>
								<input type="text" v-model="input.desc_item" class="form-control" required>
							</td>
							
							<td>
								<i class="fas fa-minus-circle" style="font-size:16px; color:red;" @click="d_remove(k)" v-show="k || ( !k && form.desc_items.length > 1)"></i>
								<i class="fas fa-plus-circle" style="font-size:16px; color:green;" @click="d_add(k)" v-show="k == form.desc_items.length-1"></i>
							</td>
						</tr>
					</tbody>
				</table>
	        
              <hr>
			  <h5 style="color:orange">Product Items</h5>
			  <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product One</label>
	                  <input type="text" v-model="form.product_1" class="form-control"  required>
	                </div>
	               </div>
	               <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Two</label>
	                  <input type="text" v-model="form.product_2" class="form-control"  required>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Three</label>
	                  <input type="text" v-model="form.product_3" class="form-control"  required>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Four</label>
	                  <input type="text" v-model="form.product_4" class="form-control"  required>
	                </div>
	               </div>
	             </div>
	           </div>
			   <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Five</label>
	                  <input type="text" v-model="form.product_5" class="form-control"  required>
	                </div>
	               </div>
	               <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Six</label>
	                  <input type="text" v-model="form.product_6" class="form-control"  required>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Seven</label>
	                  <input type="text" v-model="form.product_7" class="form-control"  required>
	                </div>
	               </div>
				   <div class="col-md-3">
	                <div class="form-label-group">
                      <label for="nid">Product Eight</label>
	                  <input type="text" v-model="form.product_8" class="form-control"  required>
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
                    case_study: '',
					userId: '',
					desc_items: [{
                    	desc_item: ''
					}],
					product_1: '',
					product_2: '',
					product_3: '',
					product_4: '',
					product_5: '',
					product_6: '',
					product_7: '',
					product_8: '',
                }
        	}
        },
        
        methods:{ 
			d_add(index) {
				this.form.desc_items.push({
					desc_item: ''
				});
			},
			d_remove(index) {
				this.form.desc_items.splice(index, 1);
			},

        	serviceInsert(){
                this.form.userId = User.id()

        		axios.post('/api/service', this.form)
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
