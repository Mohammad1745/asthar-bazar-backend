<template>
<div :class="className">
  <div class="summary bg-semidark grid gap-10">
    <Profile className="grid-span-1" />
    <Faq className="grid-span-1" />
    <News className="grid-span-1" />
    <Contact className="grid-span-1" />
  </div>
</div>
</template>

<script>
import Profile from "./summary/Profile";
import Faq from "./summary/Faq";
import News from "./summary/News";
import Contact from "./summary/Contact";

export default {
  name: "Summary",
  props: ['className'],
  components: {Profile, Faq, News, Contact},
}
</script>

<style scoped>
.summary {
  padding: 30px 5vw;
  grid-template-columns: repeat(4, minmax(0, 1fr));
}
@media (max-width: 1499px) {
  .summary {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 766px) {
  .summary {
    grid-template-columns: repeat(1, minmax(0, 1fr));
  }
}
</style>
