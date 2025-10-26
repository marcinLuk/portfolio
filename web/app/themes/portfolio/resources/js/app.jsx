import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
import { createRoot } from 'react-dom/client';

export default function MyApp() {
  return (
    <div>
      <h1>Welcome to my app</h1>
    </div>
  );
}
const root = createRoot(document.getElementById('test'));
root.render(<MyApp/>);
