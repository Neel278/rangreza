<template>
    <div>
        <about-component />
        <speakers-component />
        <eventarea-component />
        <register-component />
        <brand-component />
        <faq-component />
    </div>
</template>

<script>
import About from "./AboutComponent";
import Speakers from "./SpeakersComponent";
import EventArea from "./EventAreaComponent";
import Register from "./RegisterComponent";
import Brand from "./BrandComponent";
import Faq from "./FaqComponent";

export default {
    //
    components: {
        "about-component": About,
        "speakers-component": Speakers,
        "eventarea-component": EventArea,
        "register-component": Register,
        "brand-component": Brand,
        "faq-component": Faq
    }
};
</script>
