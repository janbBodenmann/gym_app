<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Vielen Dank für die Anmeldung! Bevor Sie beginnen, können Sie bitte Ihre E-Mail-Adresse überprüfen, indem Sie auf den Link klicken, den wir Ihnen gerade per E-Mail gesendet haben? Falls Sie die E-Mail nicht erhalten haben, senden wir Ihnen gerne eine weitere.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Eu neuer Link wurde an Ihre Mail gesendet.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Verifikations Mail noch einmal senden') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Ausloggen') }}
            </button>
        </form>
    </div>
</x-guest-layout>
