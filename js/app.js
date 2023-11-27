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
		addTodo() {
			if (!this.newTodo) {
				return
			}
			const data = {
				todo: this.newTodo,
			}

			axios
				.post('store.php', data, {
					headers: {
						'Content-Type': 'multipart/form-data',
					},
				})
				.then((res) => {
					// console.log("PROVA")
					// console.log(res.data.results)
					this.todos = res.data.results
					this.newTodo = ''
				})
		},
		toggleList(i){
			if(this.todos[i].done === true){
				return this.todos[i].done = false
			}else{
				return this.todos[i].done = true
			}
		},
		removeList(i){
			this.todos.splice(i,1)
		},
	},
	created() {
		this.fetchData()
	},
}).mount('#app')