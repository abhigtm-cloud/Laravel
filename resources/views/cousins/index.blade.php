<x-layouts>
<div>
        <h1>COUSINS</h1>
    </div>
    <ul>
        @foreach ($cousins as $cousi)
            <li>
                Name:- {{ $cousi["name"] }} &nbsp;
                Age :- {{ $cousi["Age"] }} &nbsp;
                socialMedia :-
                <!-- This is the CORRECT and recommended way: an <a> tag styled as a button -->
                <a href="{{ $cousi["SocialMedia"] }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded-md text-sm
                          transition duration-300 ease-in-out transform hover:scale-105
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 m-3">
                    Sociallyy Connect
                </a>
                
            </li>
        @endforeach
    </ul>
</x-layouts>