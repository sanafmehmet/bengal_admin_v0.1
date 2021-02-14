<template>
        <div>
       
       <div class="row container">
         <div class="card col-lg-12">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Menu Insert 
            <router-link to="/menu" class="btn btn-sm btn-info" id="add_new"> All Menu</router-link>
          </div>
          <div class="card-body">
            <h3 style="color:orange">Menu Area</h3>
            <form @submit.prevent="menuInsert">
	          <div class="form-group">
              <div class="form-row">
                  <div class="col-md-4">
                      <div class="form-label-group">
                        <label for="exampleFormControlSelect1">Language</label>
                        <select name="" v-model="form.langM" class="form-control" required>
                          <option value="0">Choose One...</option>
                          <option value="English">English</option>
                          <option value="Arabic">Arabic</option>
                          <option value="French">French</option>
                          <option value="Germany">Germany</option>
                        </select>
                      </div>
                      
                  </div>
                  <div class="col-md-4">
                  <div class="form-label-group">
                    <label for="phone">Menu</label>
                    <input type="text" v-model="form.menu" placeholder="Enter menu" class="form-control" required>
                  </div>
                  </div>
                
                  <div class="col-md-3">
                   <button type="submit" class="btn btn-success" style="margin-top:28px; margin-left:15px">Submit</button>
                  </div>
              </div>
	          </div>
            </form>  
            <hr>
            <h3 style="color:orange">Sub Menu Area</h3>
            <form @submit.prevent="submenuInsert">
                <div class="form-group">
              <div class="form-row">
                  <div class="col-md-3">
                      <div class="form-label-group">
                        <label for="exampleFormControlSelect1">Language</label>
                        <select name="" v-model="form.langSM" class="form-control" @change="changeMenu" required>
                          <option value="0">Choose One...</option>
                          <option value="English">English</option>
                          <option value="Arabic">Arabic</option>
                          <option value="French">French</option>
                          <option value="Germany">Germany</option>
                        </select>
                      </div>
                      
                  </div>
                  <div class="col-md-3">
                  <div class="form-label-group">
                    <label for="exampleFormControlSelect1">Menu</label>
                        <select name="" v-model="form.menuId" class="form-control" required v-bind:disabled="menuItem">
                          <option v-for="m in getMenu" :key="m.id" :value="m.id">{{ m.menu }}</option>
                        </select>
                  </div>
                  </div>

                  <div class="col-md-3">
                  <div class="form-label-group">
                    <label for="phone">Sub Menu</label>
                    <input type="text" v-model="form.submenu" placeholder="Enter Sub menu" class="form-control" required>
                  </div>
                  </div>
                
                  <div class="col-md-3">
                   <button type="submit" class="btn btn-success" style="margin-top:28px; margin-left:15px">Submit</button>
                  </div>
              </div>
	          </div>
   
	         
            </form>  
	          <hr>
            <h3 style="color:orange">Upload Achievement Image</h3>
            <form @submit.prevent="imageAInsert" enctype="multipart/form-data">
              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-4">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedImageA" required>
	                </div>
	               </div>
	                <div class="col-md-5">
	                	<img :src="form.imageA" style="height:80px; width: 100px;">
	                </div>
                  <div class="col-md-3">
	                <button type="submit" class="btn btn-success">Submit</button>
	                </div>
	             </div>
	            </div>
            </form>
            <hr>
            <h3 style="color:orange">Upload Commitment Image</h3>
            <form @submit.prevent="imageCInsert" enctype="multipart/form-data">
              <div class="form-group">
	              <div class="form-row">
	               <div class="col-md-4">
	                <div class="form-label-group">
	                 <input type="file" class="btn btn-info" @change="onFileselectedImageC" required>
	                </div>
	               </div>
	                <div class="col-md-5">
	                	<img :src="form.imageC" style="height:80px; width: 100px;">
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

          //this.getmenu()

          // Reload.$on('menu', () => {
          //   this.getmenu()
          // })

        },
        data(){
        	return{
            getMenu: [],
            menuItem: true,
        		form:{
              langM :'',
              langSM :'',
              langSSM :'',
              menu: '',
              menuId: '',
              submenu: '',
              userId: '',
              imageA: '',
              imageC: '',
              isMenu: 0,
              isSubmenu: 0,
              isSub_submenu: 0,
              isImageA: 0,
              isImageC: 0
            }
        	}
        },
        
        methods:{
          changeMenu(){
            this.menuItem = false
            axios.post('/api/getMenu', this.form)
            .then(({data}) => {
                this.getMenu = data
                console.log(this.getMenu)
            })

          },
          onFileselectedImageA(event){
        		let file=event.target.files[0];
        		if (file.size > 1048770) {
        			Notification.image_validation()
        		}else{
        			let reader = new FileReader();
        			reader.onload = event => {
        				this.form.imageA = event.target.result

        				//console.log(event.target.result);
        			};
        			reader.readAsDataURL(file);

        		}
          },
          onFileselectedImageC(event){
        		let file=event.target.files[0];
        		if (file.size > 1048770) {
        			Notification.image_validation()
        		}else{
        			let reader = new FileReader();
        			reader.onload = event => {
        				this.form.imageC = event.target.result

        				//console.log(event.target.result);
        			};
        			reader.readAsDataURL(file);

        		}
          }, 
        	menuInsert(){
            this.form.userId = User.id()
            this.form.isMenu = 1
            axios.post('/api/menu', this.form)
            .then(({data}) => {
              this.form.langM = ''
              this.form.menu = ''
              //Reload.$emit('menu')

              Toast.fire({
                icon: "success",
                title: "Successfully Inserted"
              });
        		})
        		.catch(error => this.errors = error.response.data.errors)
          },
          submenuInsert(){
            this.form.userId = User.id()
            this.form.isSubmenu = 1
            axios.post('/api/menu', this.form)
            .then((res) => {
              //this.form.lang = ''
              this.form.submenu = ''
              //Reload.$emit('menu')

              Toast.fire({
                icon: "success",
                title: "Successfully Inserted"
              });
        		})
        		.catch(error => this.errors = error.response.data.errors)
        	},
        	imageAInsert(){
            this.form.userId = User.id()
            this.form.isImageA = 1
            axios.post('/api/menu', this.form)
              .then((res) => {
                Toast.fire({
                  icon: "success",
                  title: "Successfully Inserted"
                });
              })
          },
          imageCInsert(){
            this.form.userId = User.id()
            this.form.isImageC = 1
            axios.post('/api/menu', this.form)
              .then((res) => {
                Toast.fire({
                  icon: "success",
                  title: "Successfully Inserted"
                });
              })
          }
        }
    }
</script>

<style>
	
#add_new{
	float: right;
}

</style>
