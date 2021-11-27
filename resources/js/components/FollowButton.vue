<template>
    <div>
        <button @click="handleClick" class="btn btn-primary ml-4">{{ status ? 'Unfollow' : 'Follow' }}</button>
    </div>
</template>

<script>
export default {
    props: ['userid', 'isfollowing'],
    data: () => ({
        status: false
    }),
    created() {
        this.status = this.isfollowing;
    },
    methods: {
        async handleClick() {

            try {
                const response = await axios.post(`/follow/${this.userid}`);
                const { data } = await response;
                this.status = !this.status;

            } catch (e) {
                if (e.response.status === 401)
                    window.location = '/login';
                else
                    alert('Something goes wrong... Try again later 😿');
            }
        }
    }
}
</script>

<style scoped>

</style>
