const quizData = [
  {
    question: "1. Which language runs in a web browser?",
    a: "Java",
    b: "C",
    c: "Python",
    d: "JavaScript",
    correct: "d"
  },
  {
    question: "2. What does CSS stand for?",
    a: "Central Style Sheets",
    b: "Cascading Style Sheets",
    c: "Cascading Simple Sheets",
    d: "Cars SUVs Sailboats",
    correct: "b"
  },
  {
    question: "3. What does HTML stand for?",
    a: "Hypertext Markup Language",
    b: "Hypertext Markdown Language",
    c: "Hyperloop Machine Language",
    d: "Helicopters Terminals Motorboats Lamborginis",
    correct: "a"
  },
  {
    question: "4. What year was JavaScript launched?",
    a: "1996",
    b: "1995",
    c: "1994",
    d: "none of the above",
    correct: "b"
  },
  {
    question: "5. Is javaScript is programming language?",
    a: "Yes",
    b: "No",
    c: "Not sure",
    d: "none of the above",
    correct: "a"
  },
  {
    question: "6. How we can alert hello world?",
    a: "alertbox('hello world')",
    b: "alert('hello world')",
    c: "myalert('hello world')",
    d: "none of the above",
    correct: "b"
  },
  {
    question: "7. HTML is used for?",
    a: "Build the Website/App",
    b: "Programming",
    c: "Hacking",
    d: "none of the above",
    correct: "a"
  },
  {
    question: "8. Best place to add script tag in HTML?",
    a: "Head",
    b: "Body",
    c: "Bottom of the HTML",
    d: "Both A and B",
    correct: "d"
  },
  {
    question: "9. Coding is?",
    a: "Art",
    b: "Science",
    c: "Headache",
    d: "Both A and B",
    correct: "d"
  },
  {
    question: "10. Who's your Saylani",
    a: "Sir Kashif suleman",
    b: "Sir Rizwan",
    c: "None of Them",
    d: "Both A and B",
    correct: "a"
  }
];

const quiz = document.getElementById("quiz");
const answerElements = document.querySelectorAll(".answer");
const questionElement = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitButton = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

const deselectAnswers = () => {
  answerElements.forEach((answer) => (answer.checked = false));
};

const getSelected = () => {
  let answer;
  answerElements.forEach((answerElement) => {
    if (answerElement.checked) answer = answerElement.id;
  });
  return answer;
};

const loadQuiz = () => {
  deselectAnswers();
  const currentQuizData = quizData[currentQuiz];
  questionElement.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
};

loadQuiz();

submitButton.addEventListener("click", () => {
  const answer = getSelected();
  if (answer) {
    if (answer === quizData[currentQuiz].correct) score++;
    currentQuiz++;
    if (currentQuiz < quizData.length) loadQuiz();
    else {
      quiz.innerHTML = `
            <h2>You answered ${score}/${quizData.length} questions correctly</h2>
            <button onclick="history.go(0)">Play Again</button>
            <a href="Feedback.php"><button>Feedback</button></a>
            <a href="start_home.php"><b>Back to Home</b></a>
        `;
    }
  }
});
