<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($vacancies as $vacancy)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-cent">
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">
                        {{ $vacancy->title }}
                    </a>

                    <p class="text-sm text-gray-600 font-bold">{{ $vacancy->company }}</p>
                    <p class="text-sm">Deadline: {{ $vacancy->deadline }}</p>
                </div>

                <div class="flex flex-col md:flex-row stretch gap-3 mt-5 md:mt-0">
                    <a href="#"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Candidates
                    </a>

                    <a href="{{ route('vacancies.edit', ['vacancy' => $vacancy]) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Edit
                    </a>

                    <a href="#"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Delete
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">There are no vacancies to show</p>
        @endforelse

    </div>

    <div class="mt-10">
        {{ $vacancies->links() }}
    </div>
</div>
