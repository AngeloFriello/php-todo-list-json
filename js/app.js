const { createApp } = Vue

createApp({
	data() {
		return {
			title: 'To Do List',
			todos: [],
			newTodo: '',
		}
	},
	methods: {
		fetchData() {
			axios.get('server.php').then((res) => {
				console.log(res.data.results)
				this.todos = res.data.results
			})
		},
	},
	created() {
		this.fetchData()
		console.log(this.todos)
	},
}).mount('#app')