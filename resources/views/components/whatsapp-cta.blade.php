@php
    $whatsappNumber = \App\Models\Setting::where('key', 'whatsapp_number')->value('value') ?? '923448559422';
    $whatsappMessage = \App\Models\Setting::where('key', 'whatsapp_message')->value('value') ?? 'Assalamualaikum, I want to learn about your Quran courses.';
    $url = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode($whatsappMessage);
@endphp
<a href="{{ $url }}" target="_blank" class="fixed bottom-6 right-6 lg:bottom-10 lg:right-10 z-[100] bg-[#25D366] text-white w-[60px] h-[60px] rounded-full shadow-[0_4px_12px_rgba(37,211,102,0.4)] flex items-center justify-center text-[34px] transition-transform hover:-translate-y-1 hover:shadow-[0_6px_16px_rgba(37,211,102,0.6)] animate__animated animate__pulse animate__infinite animate__slower" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
