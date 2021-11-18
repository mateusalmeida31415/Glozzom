{{-- Navbar --}}
<navbar-component 
id="main-nav"
:brand="[{'name': 'Glozzom', 'link': '#'}]"
:itens="[
    {
        'text': 'home', 
        'link': '{{route('home')}}', 
        'ref': '', 
        'path': '/'
    },
    {
        'text': 'about us', 
        'link': '{{route('about')}}', 
        'ref': '', 
        'path': '/about-us'
    },
    {
        'text': 'services', 
        'link': '{{route('services')}}', 
        'ref': '', 
        'path': '/services'
    },
    {
        'text': 'blog', 
        'link': '#', 
        'ref': ''
    },
    {
        'text': 
        'contact', 
        'link': '#', 
        'ref': ''
    }
]">
</navbar-component>