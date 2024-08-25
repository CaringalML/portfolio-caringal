document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".text");
    let currentIndex = 0;
  
    function typeText(element, text) {
      let hackerText = "";
      let currentCharIndex = 0;
  
      function typeChar() {
        if (currentCharIndex < text.length) {
          hackerText = text
            .substring(0, currentCharIndex)
            .replace(/./g, (char) => (Math.random() > 0.5 ? getRandomChar() : char));
          element.textContent = hackerText; // Update element text
          currentCharIndex++;
          setTimeout(typeChar, 100); // Adjust the speed of typing here
        } else {
          element.textContent = text; // Set the final text
          setTimeout(showNextParagraph, 2000); // Wait 2 seconds before showing the next paragraph
        }
      }
  
      function getRandomChar() {
        const chars = "!@#$%^&*()_+-=<>?/|[]{}:;ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        return chars.charAt(Math.floor(Math.random() * chars.length));
      }
  
      element.textContent = ""; // Clear the text
      element.style.display = "block"; // Show the current element
      typeChar(); // Start typing
    }
  
    function showNextParagraph() {
      elements[currentIndex].style.display = "none"; // Hide current element
      currentIndex = (currentIndex + 1) % elements.length; // Move to the next element
      // Restart the typing animation
      typeText(elements[currentIndex], elements[currentIndex].textContent);
    }
  
    // Start the typing animation
    typeText(elements[currentIndex], elements[currentIndex].textContent);
  });
  