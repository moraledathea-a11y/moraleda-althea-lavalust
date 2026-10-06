import { useState } from "react";
import axios from "axios";
import "./App.css";

function App() {
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");
  const [loggedIn, setLoggedIn] = useState(false);

  const login = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post("/api/login", {
        username: username,
        password: password
      });

      console.log(response.data);

      localStorage.setItem(
        "token",
        response.data.access_token
      );

      setLoggedIn(true);

    } catch (error) {
      console.log("ERROR:", error);
      console.log("RESPONSE:", error.response?.data);

      alert("Login failed. Check the browser console.");
    }
  };

  const logout = () => {
    localStorage.removeItem("token");
    setLoggedIn(false);
  };

  if (loggedIn) {
    return (
      <div className="dashboard">
        <div className="dashboard-card">
          <h1>Product Management System</h1>

          <h2>Welcome, {username}!</h2>

          <p>Login successful.</p>

          <button onClick={logout}>
            Logout
          </button>
        </div>
      </div>
    );
  }

  return (
    <div className="login-page">
      <div className="login-card">
        <h1>Product Management</h1>

        <p>Login to continue</p>

        <form onSubmit={login}>
          <input
            type="text"
            placeholder="Username"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
            required
          />

          <input
            type="password"
            placeholder="Password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            required
          />

          <button type="submit">
            Login
          </button>
        </form>

        <div className="demo-account">
          <strong>Demo Account</strong>
          <br />
          Username: admin
          <br />
          Password: admin123
        </div>
      </div>
    </div>
  );
}

export default App;