<x-layout>
    <div class="prose lg:prose-xl mx-auto p-6">

        <h1 class="text-4xl font-bold text-blue-700 mb-6">Quiz Kabyle</h1>

        <p>Testez vos connaissances sur les chiffres et les salutations en Kabyle ! Cliquez sur la bonne réponse.</p>

        <div x-data="quiz()" class="mt-6 space-y-6">

            <!-- Question 1 -->
            <div>
                <p class="font-semibold">1. Comment dit-on '3' en Kabyle ?</p>
                <template x-for="option in questions[0].options" :key="option">
                    <button 
                        @click="checkAnswer(0, option)" 
                        x-text="option" 
                        class="block px-4 py-2 mt-2 border rounded hover:bg-blue-100 focus:outline-none"
                        :class="{'bg-green-200': questions[0].answered && option == questions[0].answer, 
                                 'bg-red-200': questions[0].answered && option != questions[0].answer && selected[0]==option}">
                    </button>
                </template>
                <p x-show="questions[0].answered" class="mt-2" x-text="feedback[0]"></p>
            </div>

            <!-- Question 2 -->
            <div>
                <p class="font-semibold">2. Comment dit-on 'Bonjour' en Kabyle ?</p>
                <template x-for="option in questions[1].options" :key="option">
                    <button 
                        @click="checkAnswer(1, option)" 
                        x-text="option" 
                        class="block px-4 py-2 mt-2 border rounded hover:bg-blue-100 focus:outline-none"
                        :class="{'bg-green-200': questions[1].answered && option == questions[1].answer, 
                                 'bg-red-200': questions[1].answered && option != questions[1].answer && selected[1]==option}">
                    </button>
                </template>
                <p x-show="questions[1].answered" class="mt-2" x-text="feedback[1]"></p>
            </div>

            <!-- Question 3 -->
            <div>
                <p class="font-semibold">3. Comment dit-on 'Rouge' en Kabyle ?</p>
                <template x-for="option in questions[2].options" :key="option">
                    <button 
                        @click="checkAnswer(2, option)" 
                        x-text="option" 
                        class="block px-4 py-2 mt-2 border rounded hover:bg-blue-100 focus:outline-none"
                        :class="{'bg-green-200': questions[2].answered && option == questions[2].answer, 
                                 'bg-red-200': questions[2].answered && option != questions[2].answer && selected[2]==option}">
                    </button>
                </template>
                <p x-show="questions[2].answered" class="mt-2" x-text="feedback[2]"></p>
            </div>

        </div>

    </div>

    <!-- Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        function quiz() {
            return {
                questions: [
                    { 
                        question: "Comment dit-on '3' en Kabyle ?", 
                        answer: "tlata", 
                        options: ["yiwen", "tlata", "sin"], 
                        answered: false 
                    },
                    { 
                        question: "Comment dit-on 'Bonjour' en Kabyle ?", 
                        answer: "Azul", 
                        options: ["Amek tiṭṭilid?", "Tanemmirt", "Azul"], 
                        answered: false 
                    },
                    { 
                        question: "Comment dit-on 'Rouge' en Kabyle ?", 
                        answer: "Azeggagh", 
                        options: ["Azeggagh", "Amiddadi", "Awragh"], 
                        answered: false 
                    }
                ],
                selected: {},
                feedback: {},
                checkAnswer(index, option) {
                    this.questions[index].answered = true;
                    this.selected[index] = option;
                    this.feedback[index] = option === this.questions[index].answer ? "✅ Correct !" : "❌ Incorrect, la bonne réponse est : " + this.questions[index].answer;
                }
            }
        }
    </script>
</x-layout>
