class AppStoreage {
    storeToken(token){
        localStorage.setItem('token', token)
    }

    storeUser(user){
        localStorage.setItem('user', user)
    }

    storeRole(role){
        localStorage.setItem('role', role)
    }

    storeUrl(url){
        localStorage.setItem('url', url)
    }

    store(token, user, role, url){
        this.storeToken(token)
        this.storeUser(user)
        this.storeRole(role)
        this.storeUrl(url)
    }

    clear(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        localStorage.removeItem('role')
    }

    getToken(){
        localStorage.getItem('token')
    }

    getUser(){
        localStorage.getItem('user')
    }

    getRole(){
        localStorage.getItem('role')
    }

    getUrl(){
        localStorage.getItem('url')
    }
}

export default AppStoreage = new AppStoreage()