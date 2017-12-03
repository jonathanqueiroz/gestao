<style>
.radioGroup label {
  display: inline-block;
  margin: 0 0.2em;
  text-align: center;
}
.radioGroup label input[type="radio"] {
  margin: 0.5em auto;
}
</style>

<div class="radioGroup">
        <label for="markStudent">Mark User as Student<br />
        </label>
            <input type="radio" name="mark" id="markStudent" value="Student" />
        <label for="markAdmin">Mark User as Admin<br />
        </label>
            <input type="radio" name="mark" id="markAdmin" value="Admin" />
        <label for="markService">Mark User as Service<br />
        </label>
            <input type="radio" name="mark" id="markService" value="Service" />
        <label for="markNull">Mark User as Null<br />
        </label>
            <input type="radio" name="mark" id="markNull" value="Null" />
    </div>