<form wire:submit="submit" class="space-y-4 rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
    <div>
        <label for="name" class="mb-2 block text-sm text-slate-200">Name</label>
        <input
            id="name"
            type="text"
            wire:model.blur="name"
            class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:border-violet-400 focus:outline-none"
            placeholder="Your name"
            autocomplete="name"
        >
        @error('name') <p class="mt-2 text-xs text-rose-300">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="email" class="mb-2 block text-sm text-slate-200">Email</label>
        <input
            id="email"
            type="email"
            wire:model.blur="email"
            class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:border-violet-400 focus:outline-none"
            placeholder="you@example.com"
            autocomplete="email"
        >
        @error('email') <p class="mt-2 text-xs text-rose-300">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="message" class="mb-2 block text-sm text-slate-200">Message</label>
        <textarea
            id="message"
            rows="5"
            wire:model.blur="message"
            class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:border-violet-400 focus:outline-none"
            placeholder="Tell me about your project or role."
        ></textarea>
        @error('message') <p class="mt-2 text-xs text-rose-300">{{ $message }}</p> @enderror
        @error('send') <p class="mt-2 text-xs text-rose-300">{{ $message }}</p> @enderror
    </div>

    @if ($sent)
        <p class="rounded-lg border border-emerald-600/40 bg-emerald-500/10 px-3 py-2 text-sm text-emerald-200">
            Your message was sent. I will get back to you soon.
        </p>
    @endif

    <button type="submit" class="inline-flex items-center rounded-xl bg-violet-500 px-5 py-3 text-sm font-medium text-slate-950 transition hover:bg-violet-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-300">
        Send Message
    </button>
</form>
