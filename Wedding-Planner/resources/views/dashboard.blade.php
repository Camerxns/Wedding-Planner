<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <div class="p-6 text-gray-900">
                    <h1>Welcome {{ __(Auth::user()->name) }}!</h1>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <div class="p-6 text-gray-900">
                    <h1>Will You Be Attending?</h1>
                    <form id="attendanceForm" method="POST" action="{{route('dashboard.store')}}">
                        @csrf
                        <label for="yes">Yes</label>
                        <input type="radio" value="Yes" onclick="showRSVPForm()" name="answer1">
                        <label for="no">No</label>
                        <input type="radio" value="No" name="answer1">
                    </form>

                    <form id="rsvpForm" style="display:none;" method="POST" action="{{route('dashboard.store')}}">
                        @csrf
                        <div class="flex flex-col items-center">
                            <label for="name">Full Name</label>
                            <input placeholder="Please Enter Your Name" name="fullName">
                            <label for="name">Are you bringing anything for the potluck?</label>
                            <div>
                                <label for="Yes" class="mr-2">Yes</label>
                                <input type="radio" name="answer2" value="Yes" onclick="showPotluckField()">
                                <label for="No" class="mr-2 ml-4">No</label>
                                <input type="radio" name="answer2" value="No">
                            </div>
                            <label for="Bringing" id="potluckLabel" style="display:none;">What Are You Bringing?</label>
                            <textarea placeholder="Please Enter What You Are Bringing For The Potluck" id="potluckField" style="display:none;" name="potluck"></textarea>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function showRSVPForm() {
        var attendance = document.querySelector('input[name="answer1"]:checked').value;
        if (attendance === "Yes") {
            document.getElementById('rsvpForm').style.display = 'block';
            document.getElementById('rsvpTag').style.display = 'block';
        } else {
            document.getElementById('rsvpForm').style.display = 'none';
            document.getElementById('rsvpTag').style.display = 'none';
        }
    }

    function showPotluckField() {
        var potluck = document.querySelector('input[name="answer2"]:checked').value;
        if (potluck === "Yes") {
            document.getElementById('potluckLabel').style.display = 'block';
            document.getElementById('potluckField').style.display = 'block';
        } else {
            document.getElementById('potluckLabel').style.display = 'none';
            document.getElementById('potluckField').style.display = 'none';
        }
    }
</script>
