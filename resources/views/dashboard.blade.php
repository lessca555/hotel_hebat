<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-black">
                <div class="flex gap-4">
                    <a href="{{ route('facility.index') }}">
                        <div class="w-[150px] font-bold bg-blue-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>Facitlity</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('room.index') }}">
                        <div class="w-[150px] font-bold bg-red-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>Room Type</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('bed.index') }}">
                        <div class="w-[150px] font-bold bg-green-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>Bed Type</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
