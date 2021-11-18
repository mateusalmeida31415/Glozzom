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
        'link': '{{route('blog')}}', 
        'ref': '',
        'path': '/blog'
    },
    {
        'text': 'contact', 
        'link': '{{route('contact')}}', 
        'ref': '',
        'path': '/contact'
    }
]">
</navbar-component>