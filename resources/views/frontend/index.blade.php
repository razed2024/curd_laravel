<x-app-web-layout>
    <x-slot:title>
       Custome Title
    </x-slot>
    <div class="py-5">
      <div class="container">
      <h3> Welcome index page</h3>
      </div>
    </div>

    <x-slot name="scripts">
       <script>
        alert('This is my script area');
       </script>
    </x-slot>

</x-app-web-layout>
