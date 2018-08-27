@extends('layout')

@section('nav-bar')
<div class="nav-bar links" id="show-modal-dialog">
	
	<a class="main-logo" href="{{ url('/home') }}" id="logo-home">TSonnemann Pizza Co.</a>
	
	<a href="{{ url('/home') }}" id="home">Home</a>
	
	<a id="manageMenu" @click="showModal = true">Add to Menu</a>
    <modal v-if="showModal" @close="showModal = false">
	<h3 slot="header">Add a new menu item</h3>
    </modal>
</div>
@endsection

@section('content')
<div class="position-ref">
	<div class="full-width justify-content">
		<div class="menu top-header justify-content full-height full-width position-ref">
			<div class="section margin-top font-weight-bold">
				<p class="small-buffer">Welcome to our new website! Please find all of our options below. Take-out is available.</p>
				<p>Select "Add to menu" in the top navigation bar to add more items to this menu.</p>
			</div>
			<div v-for="item in menu " class="menu-div">
				<div class="section-header">@{{ item.menu_type_name }}</div>
				
				<div v-for="menuItem in item.menu_items" class="section">
					<div class="menu_item_list div_float_left">@{{ menuItem.menu_item }}</div>
					<div class="menu_item_list div_float_left">@{{ menuItem.price }}</div>
					<div class="menu_item_list div_float_left div_description">@{{ menuItem.item_description }}</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('modal-form')
<script type="text/x-template" id="modal-template">
	<transition name="modal">
		<div class="modal-mask">
			<div class="modal-wrapper">
				<div class="modal-container">
					<form method="POST" action="/create" @submit.prevent="submitForm">
						<div class="modal-header">
							<slot name="header">
								default header
							</slot>
						</div>

						<div class="modal-body">
							<div class="form-separator">
								<p>Type of item:</p>
								<select name="menuType" class="form-input" v-model="menuType">
									@foreach ($menuTypes as $menuType)
										<option value="{{$menuType['id']}}">{{ $menuType['menu_type_name'] }}</option>
									@endforeach
								</select>
							</div>							
							<div class="form-separator">
								<p>Item name:</p>
								<input type="text" name="menuItem" class="form-input" v-model="menuItem" />
							</div>
							<div class="form-separator">
								<p>Item Description:</p>
								<textarea name="description" cols="40" rows="5" class="form-input" v-model="description"></textarea>
							</div>
							<div class="form-separator">
								<p>Price:</p>
								<input type="text" name="price" class="form-input" v-model="price"/>
							</div>
						</div>

						<div class="modal-footer">
							<div class="form-separator">
								<button class="modal-default-button" @click="$emit('close')">
									Save
								</button>
							</div>		
						</div>
					</form>
				</div>
			</div>
		</div>
	</transition>
</script>

<script type="text/javascript">

	// start app
	var vm = new Vue({
	    el: '#main-content',
	  
	    data: {
		    showModal: false,
			menu: []
	    },
	  
		mounted() {
			axios.get('/menu').then(response => this.menu = response.data.menu);
		}
	  
	});

	Vue.config.devtools = true;
		 
	Vue.component('modal', {
	    template: '#modal-template',
		data: function() {
			return {
				
				menuItem: '',
				price: '',
				description: '',
				menuType: ''
			}
		},
		props: ['showModal'],
		
		methods: {
			submitForm() {
				axios.post('/create', {
					menuItem: this.menuItem,
					price: this.price,
					description: this.description,
					menuType: this.menuType
				}).then(location.reload());
			}
		}

	});

</script>
@endsection
