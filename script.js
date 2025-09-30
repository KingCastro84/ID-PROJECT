function checkID() {
 const serial = document.getElementById("serialInput").value.trim();
 const result = document.getElementById("result");

if (!serial) {
    result.textContent = " Please enter a serial number.";
    result.style.color = "red";
    return;
    }

// Example mock database
const mockDatabase = {
    "12345": "Ready",
    "67890": "Waiting",
    "11111": "Error"
    };

if (mockDatabase[serial]) {
 let status = mockDatabase[serial];
    if (status === "Ready") {
          result.textContent = " Your ID is Ready!";
          result.style.color = "green";
        } else if (status === "Waiting") {
          result.textContent = " Your ID is still being processed.";
          result.style.color = "orange";
        } else {
          result.textContent = " Error occurred while checking ID.";
          result.style.color = "red";
        }
      } else {
        result.textContent = " ID not found.";
        result.style.color = "red";
      }
    }
