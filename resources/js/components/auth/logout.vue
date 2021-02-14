<template>
    <div>
        
    </div>
</template>

<script>
export default {
    created(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        //window.location.href = 'http://127.0.0.1:8001/';
        //window.location.href = 'http://modelbd.com/';
        
        this.$router.push({name: '/'})
        //return redirect()->route('login');
    }
}
</script>